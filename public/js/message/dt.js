DatatableMessage.bootstrapTable({
    url:"/datatable-message",
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
            title: "Username",
            field: "username",
            sortable: true
        },
    ],
})

