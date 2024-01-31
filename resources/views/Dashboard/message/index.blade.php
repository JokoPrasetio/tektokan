@extends('content.main')
@section('body_content')
    <div class="container-xl mt-5 px-4">
        <div class="card mb-4">
            <div class="card-header py-2">
                <div class="row">
                    <div class="me-auto col-auto my-auto">
                        Message
                    </div>
                </div>
            </div>
            <div class="card-body">
                <button class="btn btn-success btn-xl btn-icon position-fixed end-0 me-5 lift floating-button bottom-0 mb-5"
                    type="button" data-bs-toggle="modal" data-bs-target="#add_message"
                    style="z-index:1; width:4rem; height:4rem; border-radius:50%; background-color:#65B741; border:none">
                    <i class="fas fa-plus fa-fw" style="margin-top: 0.3rem; font-size: 1.6rem;"></i>
                </button>
                <div class="container">
                    <table class="table small table-striped table-hover" id="data_message"></table>
                </div>
            </div>
        </div>
    </div>
    @include('Dashboard.message.modals.add')
    <script src="/js/message/_init.js"></script>
    <script src="/js/message/dt.js"></script>
@endsection
