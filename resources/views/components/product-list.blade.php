<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<div> 
<div class="container-fluid py-5">
    <div class="col-12 mx-auto">
        <h1 class="text-center">SUPPORTED STORES</h1>
        <div class="row row-cols-4 gap-5 justify-content-center">
            <div class="card col p-0">
                <img src="{{asset('img/Tailoring Shop 1.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Tailoring Shop 1</h4>
                    <p class="card-text">Naga City</p>
            <button type = "button" class= "btn-dark-green text-decoration-none rounded-pill">
                    <a class="nav-link {{request()->is('ordeforms') ? 'active' : ''}}" href="/orderforms"><b> BOOK NOW </b> </a>
                    </button>
                </div>
            </div>
            <div class="card col p-0">
                <img src="{{asset('img/Tailoring Shop 2.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">Tailoring Shop 2</h4>
                    <p class="card-text">Naga City</p>
                   
                    <button type = "button" class= "btn-dark-green text-decoration-none rounded-pill">
                    <a class="nav-link {{request()->is('ordeforms') ? 'active' : ''}}" href="/orderforms"><b> BOOK NOW </b> </a>
                    </button>
                </div>
            </div>


        </div>
    </div>
</div>
</div> 




