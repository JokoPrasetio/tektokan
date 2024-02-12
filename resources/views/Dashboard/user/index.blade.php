@extends('content.main')
@vite('resources/css/app.css')
@section('body_content')
    <div class="container-xl mt-5 px-4">
        <div class="card mb-4">
            <div class="card-header py-2">
                <div class="row">
                    <div class="me-auto col-auto my-auto">
                        Data User
                    </div>

                </div>
            </div>
            <div class="card-body">
                <div class="container">
                    <table class="table small table-striped table-hover" id="table_data_user"></table>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
        Echo.channel("hello")
            .listen("HelperEvent", (e) => {
                console.log("event from hello world");
                console.log(e);
    });
})
    </script>
    <script src="/js/user/_init.js"></script>
    <script src="/js/user/dt.js"></script>
@endsection
