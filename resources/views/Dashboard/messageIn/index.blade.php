@extends('content.main')
@section('body_content')
    <div class="container-xl mt-5 px-4">
        <div class="card mb-4">
            <div class="card-header py-2">
                <div class="row">
                    <div class="me-auto col-auto my-auto">
                        Message {{ auth()->user()->username }}
                    </div>
                </div>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/message">Surat Masuk <span
                                class="badge badge-canter rounded-circle bg-danger ms-2" id="surat_masuk"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/message-out">Surat Keluar</a>
                    </li>
                </ul>
                <button class="btn btn-success btn-xl btn-icon position-fixed end-0 me-5 lift floating-button bottom-0 mb-5"
                    type="button" data-bs-toggle="modal" data-bs-target="#add_message"
                    style="z-index:1; width:4rem; height:4rem; border-radius:50%; background-color:#65B741; border:none">
                    <i class="fas fa-plus fa-fw" style="margin-top: 0.3rem; font-size: 1.6rem;"></i>
                </button>
                <div class="container">
                    <table class="table small table-striped table-hover" id="data_message_in"></table>
                </div>
            </div>
        </div>
    </div>
    @include('Dashboard.messageIn.modals.add')

    <script></script>
    <script src="/js/message/messageIn/_init.js"></script>
    <script src="/js/message/messageIn/dt.js"></script>
@endsection
