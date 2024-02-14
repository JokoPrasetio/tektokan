
$(document).ready(function(){
    getNotif()
})

document.addEventListener("DOMContentLoaded", function(event){
    const dataTable  = DataTableMessageIn.bootstrapTable({
        url:"/datatable-message-in",
        showColumns: true,
        showColumnsToggleAll: true,
        showRefresh: true,
        sortable: true,
        search: true,
        searchOnEnterKey: false,
        searchHighlight: true,
        pagination: true,
        pageSize: 20,
        pageList: [50, 100, 200],
        cookie: true,
        icons: {
            refresh:"fas fa-sync",
            columns:"fas fa-th-list"
        },
        columns:[
            {
                title: "By Message",
                field: "id",
                formatter:(value, row) => {
                    console.log(row);
                    if(row.to_send?.username){
                        return row.by_send?.username
                    }else{
                        return row.by_name
                    }
                }
            },
            {
                title: "Message",
                field: 'message'
            },
            {
                title: "File",
                field: "id",
                sortable: true,
                formatter: (value, row) => {
                    if(row.file){
                        const urlFile = "/assets/file/message/user/" + row.file;
                        return (

                            '<a href ="' +
                            urlFile +
                            '" class="badge bg-info text-decoration-none" target="_blank">Lihat File</a>'
                        );
                    }else{
                        return "<p>-</p>"
                    }


                },
            }
        ],
    })

    Echo.channel("notif")
    .listen("NotifEvent",(e) => {
        const notif = document.getElementById("surat_masuk")
        notif.innerText = e.data?.notifCount
            const newMessage = e.data?.message;
            const existingData = dataTable.bootstrapTable('getData');

        existingData.unshift(newMessage);
        dataTable.bootstrapTable('append', existingData);
    })
})

const getNotif = () => {
    $.ajax({
        url:`/notif-message-in`,
        success: function (response){
            const notif = document.getElementById("surat_masuk")
            notif.innerText = response.notif
        }
    })
}
