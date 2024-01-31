DatatableUser.bootstrapTable({
    url:"/datatable-user",
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
        {
            title: "Name",
            field: "name",
            sortable: true

        },
        {
            title: "Email",
            field:"email",
            sortable: true
        }
    ],
})
DatatableUser.find('th, td').css({
    'font-size': '0.9rem',
    'text-align': 'center'
});
