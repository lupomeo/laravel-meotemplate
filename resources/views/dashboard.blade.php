<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    

            

<div class="row">

<div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h6 text-gray-400 mb-0"> Benvenuto</h2>
                            <h3 class="fw-extrabold mb-2">{{ Auth::user()->name }}</h3>
                        </div>
                        <div class="small d-flex mt-1"> 
                            Oggi è: @php 
                            setlocale(LC_TIME, 'ita', 'it_IT.utf8');
                            $data = strftime("%A, %d %B %Y");
                            echo ($data); 
                            @endphp
                        </div> 
                        <div class="small d-flex mt-1">                               
                            <div>Sono le ore: @php echo(date('H:i:s') ); @endphp</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-0 shadow">
            <div class="col-12 px-0">
                <div class="card border-0 shadow" style="margin: 0 auto; text-align: center;">
                    <div class="card-body style="margin: 0 auto; text-align: center;">
                    <br>
                    <h2 class="fs-5 fw-bold mb-1">Statistiche Database</h2>
                    <br>
                        <div class="small d-flex mt-1">
                            Studenti presenti nel database: {{{ $stotal }}}
                            </div>
                        <div class="small d-flex mt-1">
                            Utenti registrati:  {{{ $utotal }}}
                        </div>
                        <div class="card-body" style="margin: 0 auto; text-align: center;">
                        <img><img src="assets/img/illustrations/statistiche.jpg"></img>
                        </div>         
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-0 shadow">
            <div class="col-12 px-0">
                <div class="card border-0 shadow">
                    <div class="card-body" style="margin: 0 auto; text-align: center;">
                        <br>
                        <h2 class="fs-5 fw-bold mb-1">Monitoraggio Utenti</h2>
                        <br>
                        <div class="small d-flex mt-1">
                            Ultimo utente registrato:  {{{ $lastu }}}
                        </div>
                        <div class="card-body" style="margin: 0 auto; text-align: center;">
                        <img><img src="assets/img/illustrations/analisi.jpg"></img>
                        <br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    

</x-app-layout>
