@extends("layouts.master")

@section("contenido")

<div class="container p-2">
    <div class="jumbotron">
        <div class="row align-middle">
            <div class="col-md-2">
                <img class="rounded-circle imgPerfilCol" src="{{URL::asset('assets/img/user.png')}}" alt="imagen de usuario">
            </div>
            <div class="col-md-8 align-self-center">
                <p class="lead">
                    Nombre del colaborador
                </p>
            </div>
            <div class="col-md-2">
                <button class="btn btn-block btn-danger" type="button" data-toggle="modal" href="#modalReportar">Reportar</button>
                <button class="btn btn-block btn-primary" type="button" data-toggle="modal" href="#modalCalificar">Calificar</button>
            </div>
        </div>
        
    </div>

    <div class="row">
        <div class="col-md-6">
            <h4>Comentarios</h4>
            <div class="comentarios">
                <div class="card comentario">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-between"> <span class="tituloComentario">Cooperanza</span> <span class="fechaComentario">15/07/2020</span></h5>
                        <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis molestias adipisci asperiores doloribus, soluta nostrum ab ea quasi ducimus aliquam. Illo accusamus rerum dignissimos aliquid culpa aperiam vitae ullam sunt.</p>
                    </div>
                </div>
                <div class="card comentario">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-between"> <span class="tituloComentario">Rapidez</span> <span class="fechaComentario">15/07/2020</span></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora quasi, fuga voluptates accusamus odit id quam alias sint officia harum, explicabo veniam incidunt, repellat molestiae quaerat eum delectus eligendi beatae!</p>
                    </div>
                </div>
                <div class="card comentario">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-between"> <span class="tituloComentario">Despliegue</span> <span class="fechaComentario">15/07/2020</span></h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus in praesentium fugiat itaque laboriosam provident totam sed omnis reprehenderit! Inventore culpa enim ad nihil corrupti aperiam eos nisi nulla dolore?</p>
                    </div>
                </div>
                <div class="card comentario">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-between"> <span class="tituloComentario">Confianza</span> <span class="fechaComentario">15/07/2020</span></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim sint quaerat incidunt reprehenderit nesciunt et sapiente dignissimos nam error exercitationem? Nulla suscipit, iure vel eum laudantium velit illum ipsum voluptates.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="datos">
                <form action="">
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="email" id="email" class="form-control" value="usuario@mail.com" disabled required>
                        <span class="error text-danger errorEmail"> </span>
                    </div>
                    <div class="form-group">
                        <label for="tel">Telefono</label>
                        <input type="text" id="tel" class="form-control" value="(011) 2323232323" disabled required>
                        <span class="error text-danger errorTel"> </span>
                    </div>
                    <div class="form-group">
                        <label for="domicilio">Domicilio</label>
                        <input type="text" id="domicilio" class="form-control" value="Calle falsa 123, Buenos Aires" disabled required>
                        <span class="error text-danger errorDomicilio"> </span>
                    </div>
                    <div class="form-group">
                        <label for="fechaUsuario">Usuario desde</label>
                        <input type="text" id="fechaUsuario" class="form-control" value="07/02/2020" disabled required>
                        <span class="error text-danger errorFechaUsuario"> </span>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <nav class="navbar navbar-light bg-light justify-content-between mt-4">
        <a class="navbar-brand">Colaboraciones</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </nav>
    <div class="necesidades">
    <div class="row">
        <div class="col-md-6">
            <div class="card necesidad alimentos">
                <div class="card-body">
                    <p class="text-right">18/10/2020</p>
                    <div class="row">
                        <div class="col-md-3">
                            <img class="rounded-circle imgNecesidad" src="{{URL::asset('assets/img/user.png')}}" alt="imagen de usuario">
                        </div>
                        <div class="col-md-9">
                            <h5 class="card-title">Nombre organizacion</h5>
                            <p class="card-text">Alimentos.</p>
                        </div>
                    </div>
                    <p class="mt-2">Descripcion de la necesidad</p>
                </div>
                </div>
        </div>
        <div class="col-md-6">
            <div class="card necesidad ropa">
                <div class="card-body">
                    <p class="text-right">18/10/2020</p>
                    <div class="row">
                        <div class="col-md-3">
                            <img class="rounded-circle imgNecesidad" src="{{URL::asset('assets/img/user.png')}}" alt="imagen de usuario">
                        </div>
                        <div class="col-md-9">
                            <h5 class="card-title">Nombre organizacion</h5>
                            <p class="card-text">Ropa.</p>
                        </div>
                    </div>
                    <p class="mt-2">Descripcion de la necesidad</p>
                </div>
            </div>
        </div>
    </div> <!--row -->
    <div class="row">
        <div class="col-md-6">
            <div class="card necesidad limpieza">
                <div class="card-body">
                    <p class="text-right">18/10/2020</p>
                    <div class="row">
                        <div class="col-md-3">
                            <img class="rounded-circle imgNecesidad" src="{{URL::asset('assets/img/user.png')}}" alt="imagen de usuario">
                        </div>
                        <div class="col-md-9">
                            <h5 class="card-title">Nombre organizacion</h5>
                            <p class="card-text">Limpieza.</p>
                        </div>
                    </div>
                    <p class="mt-2">Descripcion de la necesidad</p>
                </div>
                </div>
        </div>
        <div class="col-md-6">
            <div class="card necesidad varios">
                <div class="card-body">
                    <p class="text-right">18/10/2020</p>
                    <div class="row">
                        <div class="col-md-3">
                            <img class="rounded-circle imgNecesidad" src="{{URL::asset('assets/img/user.png')}}" alt="imagen de usuario">
                        </div>
                        <div class="col-md-9">
                            <h5 class="card-title">Nombre organizacion</h5>
                            <p class="card-text">Varios.</p>
                        </div>
                    </div>
                    <p class="mt-2">Descripcion de la necesidad</p>
                </div>
            </div>
        </div>
    </div> <!--row -->
</div>

</div> <!-- container -->

@include("UIModalCalificar")
@include("UIModalReportar")

<!-- Scripts -->
<script type="text/javascript" src="{{URL::asset('assets/js/colaborador.js')}}"></script>
@endsection