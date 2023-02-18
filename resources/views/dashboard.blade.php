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
                        <div class="card-body" style="margin: 0 auto; text-align: center;">
                            <h2 class="fs-5 fw-bold mb-1">Tempo di Oggi</h2>
                        <div style="align:center;"><iframe style="margin: 0 auto; text-align: center;" src="https://www.3bmeteo.com/moduli_esterni/localita_1_giorno_compatto/5913/ffffff/fc9b2a/5e5e5e/ffffff/it" width=200 height=310 frameborder="0"></iframe><br/><a href="https://www.3bmeteo.com/meteo/roma" ></a> </div>
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
                        <br><br>
                    <h2 class="fs-5 fw-bold mb-1">Previsioni della settimana</h2>
                        <br>
                        <div class="card-body" style="margin: 0 auto; text-align: center;">
                            <div style="margin: 0 auto; text-align: center;"><iframe style="margin: 0 auto; text-align: center;" src="https://www.3bmeteo.com/moduli_esterni/localita_7_giorni_compatto/5913/ffffff/fc9b2a/5e5e5e/ffffff/it" width=382 height=192 frameborder="0"></iframe><br/><a href="https://www.3bmeteo.com/meteo/roma" ></a></div> 
                        </div>    
                                <br> <br> <br><br><br><br>
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
                        <br><br>
                        <h2 class="fs-5 fw-bold mb-1">Dal Mondo</h2>
                        <br>
                        <div class="card-body" style="margin: 0 auto; text-align: center;">
                         <table border="0"><tr><td>
	                            <script language="JavaScript" type="text/javascript" charset="iso-8859-1" src="//www.intopic.it/iframe.php?cat=&amp;rootcat=&amp;type=1&amp;bgcolor=FFFFFF&amp;bdcolor=FC9B2A&amp;lcolor=000000&amp;font=1&amp;fontsize=8&amp;box=340&amp;window=1">
	                            </script>
	                            </td></tr><tr><td align="right">
	                                <a href="https://www.intopic.it/">
	                                <img src="//www.intopic.it/files/ifr.gif" alt="intopic" border="0"></a>
	                                </td></tr>
                        </table>
                        <br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    

</x-app-layout>
