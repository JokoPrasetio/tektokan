DataTableMessageIn.bootstrapTable({
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
            field: "by_send.username",
            sortable: true,
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
