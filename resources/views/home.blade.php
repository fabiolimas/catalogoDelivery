@extends('layouts.app')
@php

    $categorias = [['nome' => 'Pizza', 'id'=>1], ['nome' => 'Piza Piquinique', 'id'=>2], ['nome' => 'Carnes', 'id'=>3], ['nome' => 'Bebidas','id'=>3]];
    $produtos =[['descricao'=>'8 pedaços 3 sabores', 'titulo'=>'Pizza Grande'],['descricao'=>'5 pedaços 2 sabores', 'titulo'=>'Pizza Pequena'], ['descricao'=>'7 pedaços 3 sabores', 'titulo'=>'Pizza Média'] ];
    $dias=[['dia'=>'Segunda', 'horario'=>'8:00 / 23:00'], ['dia'=>'Terça-feira','horario'=>'8:00 / 23:00'], ['dia'=>'Quarta-feira','horario'=>'8:00 / 23:00'] , ['dia'=>'Quinta-feira','horario'=>'8:00 / 23:00'],  ['dia'=>'Sexta-feira','horario'=>'8:00 / 23:00'] , ['dia'=>'Sábado','horario'=>'8:00 / 12:00']];
    $bairros=[['nome'=>'Caixa Dágua', 'taxa'=>'R$ 12,50'],['nome'=>'Bananeira', 'taxa'=>'R$ 15,50'], ['nome'=>'Lider', 'taxa'=>'R$ 9,90'], ['nome'=>'Catuaba', 'taxa'=>'R$ 15,50']];
@endphp
@section('title', 'Home Catalogo')
@section('content')

    <div class="container  justify-content-end mt-4">
        <div class="row">
            <div class="col-md-3">


                <div id="accordion" class="accordion-one mg-b-10" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <a class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                style="color:#000000">
                                <i class="fa fa-bars mg-r-10"></i> MENU
                            </a>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample"
                            style="">
                            <div class="card-body">
                                <div class="card-people-list pd-5">
                                    <div class="media-list" style="margin-top:-10px">
                                        @foreach ($categorias as $cats)
                                            <div class="media d-flex ">
                                                <a href="#{{$cats['id']}}">
                                                    <img src="{{ asset('images/logo.jpg') }}"
                                                        style="width:30px; height:30px; border-radius: 100%;"
                                                        alt="">
                                                </a>
                                                <div class="media-body">
                                                    <a href="#{{$cats['id']}}" style="color:#000000">{{ $cats['nome'] }}</a>
                                                </div>
                                                <a href="#{{$cats['id']}}" style="color:#000000"><i
                                                        class="fa fa-chevron-circle-right"></i></a>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Coluna do meio --}}
            <div class="col-md-6">
                <div class="mg-b-10">
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/ban.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/ban.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/ban.jpg') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                @foreach($categorias as $catp)
                <div class="card card-people-list p-3 mt-2" id="{{$catp['id']}}">
                    <div class="slim-card-title"><i class="fa fa-caret-right"></i> {{$catp['nome']}}</div>
                    <div class="media-list">
                        @foreach($produtos as $produto)
                        <div class="produtos">

                            <div style="width:120px;text-align:center;">
                                <div style="display:block;float:left;text-align:center;">
                                    <img src="{{ asset('images/logo.jpg') }}" class="img-thumbnail"
                                        style="width:100%;border:0;;">

                                </div>
                                <div style="display:block;float:left;">
                                </div>
                            </div>
                            <div class="media-body" style="margin-left:5px !important;float:left;">


                                <span class="tx-15">
                                    <strong>{{$produto['titulo']}}</strong>
                                </span>


                                <p class="tx-12 mg-r-5" style="color:#555;">{{$produto['descricao']}}</p>


                                <p class="tx-14">
                                    <small style="display:none;">
                                        <strong>R$ </strong>
                                        <del style="color:red;">0,00</del>
                                    </small>
                                    <strong>
                                    </strong>
                                </p>
                            </div>

                            <div align="left">
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-window-close"></i>
                                </button>
                            </div>



                        </div>
                        @endforeach



                    </div>
                </div>
                @endforeach


            </div>
            {{-- coluna contato --}}
            <div class="col-md-3">
                <div class="card card-people-list p-4 ">
                    <div class="slim-card-title"><i class="fa fa-caret-right"></i> COMPARTILHE</div>
                    <div class="media-list">
                        <!-- AddToAny BEGIN -->
                        <div style="margin: 0px auto; align-items: center; display: flex; flex-flow: row wrap; justify-content: center; line-height: 32px;" class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="#">
                            <!--                        <a class="a2a_button_facebook"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a class="a2a_button_facebook_messenger"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                            <a class="a2a_button_whatsapp" target="_blank" rel="nofollow noopener" href="/#whatsapp"><span class="a2a_svg a2a_s__default a2a_s_whatsapp" style="background-color: rgb(18, 175, 10);"><svg focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M16.21 4.41C9.973 4.41 4.917 9.465 4.917 15.7c0 2.134.592 4.13 1.62 5.832L4.5 27.59l6.25-2.002a11.241 11.241 0 0 0 5.46 1.404c6.234 0 11.29-5.055 11.29-11.29 0-6.237-5.056-11.292-11.29-11.292zm0 20.69c-1.91 0-3.69-.57-5.173-1.553l-3.61 1.156 1.173-3.49a9.345 9.345 0 0 1-1.79-5.512c0-5.18 4.217-9.4 9.4-9.4 5.183 0 9.397 4.22 9.397 9.4 0 5.188-4.214 9.4-9.398 9.4zm5.293-6.832c-.284-.155-1.673-.906-1.934-1.012-.265-.106-.455-.16-.658.12s-.78.91-.954 1.096c-.176.186-.345.203-.628.048-.282-.154-1.2-.494-2.264-1.517-.83-.795-1.373-1.76-1.53-2.055-.158-.295 0-.445.15-.584.134-.124.3-.326.45-.488.15-.163.203-.28.306-.47.104-.19.06-.36-.005-.506-.066-.147-.59-1.587-.81-2.173-.218-.586-.46-.498-.63-.505-.168-.007-.358-.038-.55-.045-.19-.007-.51.054-.78.332-.277.274-1.05.943-1.1 2.362-.055 1.418.926 2.826 1.064 3.023.137.2 1.874 3.272 4.76 4.537 2.888 1.264 2.9.878 3.43.85.53-.027 1.734-.633 2-1.297.266-.664.287-1.24.22-1.363-.07-.123-.26-.203-.54-.357z"></path></svg></span><span class="a2a_label">WhatsApp</span></a>
                        <div style="clear: both;"></div></div>
                        <script async="" src="https://static.addtoany.com/menu/page.js"></script>
                        <!-- AddToAny END -->
                    </div>
                </div>
            </div>


        </div>
        {{-- Modal Informações da loja --}}
        <div class="modal fade " id="infoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-info">
                  <h1 class="modal-title fs-5 " id="exampleModalLabel">INFORMAÇÕES DA LOJA</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <h5>CAMBALACHO PIZZARIA</h5>
                    <p>Av Aeroporto - Nº 482 <br>Centro - Alta Floresta / MT</p>

                </div>
                {{-- <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
              </div>
            </div>
          </div>

            {{-- Modal Horarios --}}
        <div class="modal fade " id="horariosModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-secondary">
                  <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">HORARIOS DE FUNCIONAMENTO</h1>
                  <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    @foreach($dias as $dia)
                    <div class="funcionamento">
                   <h5>{{$dia['dia']}}</h5>
                    <p>{{$dia['horario']}}</p>
                </div>
                    @endforeach
                </div>
                {{-- <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
              </div>
            </div>
          </div>

              {{-- Modal Bairros --}}
        <div class="modal fade " id="bairrosModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-secondary">
                  <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">NOSSO ENDEREÇO</h1>
                  <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <H5>Bairros</H5>
                    <table class="table table-hover">
                        <thead class="table-secondary">
                          <tr>
                            <th scope="col">Bairro</th>
                            <th scope="col">Taxa</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach($bairros as $bairro)
                          <tr>

                            <td>{{$bairro['nome']}}</td>
                            <td>{{$bairro['taxa']}}</td>

                          </tr>

                          @endforeach

                        </tbody>
                      </table>
                </div>
                {{-- <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
              </div>
            </div>
          </div>


    @endsection
