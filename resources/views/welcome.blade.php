<x-layout>




        @if (session('message'))
            <div class="alert alert-success mt-5 fs-5">
                {{ session('message') }}
            </div>
        @endif


        <main>

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1507336641158-886006775dd0?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid" width="100%" height="100%">

                  <div class="container">
                    <div class="carousel-caption text-start">
                      <h1 class="h1-color mt-5">Benvenuto nel nostro Birra Blog!</h1>

                      <p class="fs-5 h1-color">Se anche tu vorresti entrare a far parte della nostra community, contattaci subito!</p>
                      <p><a class="btn btn-lg btn-color rounded-pill" href="{{route('contact')}}">Contattaci</a></p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1528823872057-9c018a7a7553?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid" width="100%" height="100%">

                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="h1-color mt-5">Scopri l'elenco delle nostre Birrerie!</h1>
                      <p class="fs-5 h1-color">Stai cercando un posto dove trascorre una serata tra amici davanti a una buona birra?</p>
                      <p><a class="btn btn-lg  btn-color rounded-pill"" href="{{route('brewery.index')}}">Clicca qui</a></p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1606045426421-2412d1a18999?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid" width="100%" height="100%">

                  <div class="container">
                    <div class="carousel-caption text-end">
                      <h1 class="h1-color mt-5">Se ancora non lo hai fatto, registrati subito!</h1>
                      <p class="fs-5 h1-color">Vuoi essere aggiornato su tutti gli eventi e le novità nel mondo della birra</p>
                      <p><a class="btn btn-lg btn-color rounded-pill" href="{{route('register')}}">Registrati</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>


            <!-- Marketing messaging and featurettes
            ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->

            <h2 class="mt-5 fs-1 text-color ms-3">Le principali città <span class="text-color2">in cui bere:</span></h2>
            <div class="container marketing mt-5">

              <!-- Three columns of text below the carousel -->
              <div class="row">
                <div class="col-12 col-lg-4">
                    <img src="https://bibirra.it/wordpress/wp-content/uploads/Milano.png" alt="" class="img-fluid rounded-circle" width="180" height="180">

                  <h2 class="text-left mt-2 text-color">Milano</h2>
                  <p>Lorem ipsum dolor sit amet consectetur.</p>

                </div><!-- /.col-lg-4 -->
                <div class="col-12 col-lg-4">
                    <img src="https://bibirra.it/wordpress/wp-content/uploads/Roma.png" alt="" class="img-fluid rounded-circle" width="180" height="180">
                  <h2 class="text-left mt-2 text-color2">Roma</h2>
                  <p>Lorem ipsum dolor sit amet consectetur.</p>

                </div><!-- /.col-lg-4 -->
                <div class="col-12 col-lg-4">
                    <img src="https://bibirra.it/wordpress/wp-content/uploads/Napoli.png" alt="" class="img-fluid rounded-circle" width="180" height="180">
                  <h2 class="text-left mt-2 text-color">Napoli</h2>
                  <p>Lorem ipsum dolor sit amet consectetur.</p>

                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->


              <!-- START THE FEATURETTES -->

              <hr class="featurette-divider">

              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading text-color2">I più importanti eventi<span class="text-color"> a cui puoi partecipare:</span></h2>
                  <h5 class="text-color">Il birraio dell'anno</h5>
                  <p>Teatro ObiHall – Firenze</p>
                  <h5 class="text-color">Villaggio delle birra</h5>
                  <p>Bibbiano – Buonconvento (Siena)</p>
                  <h5 class="text-color">Microbo</h5>
                  <p>Parco di Villa Cassarini a Porta Saragozza</p>
                  <h5 class="text-color">Eurhop! Roma Beer Festival</h5>
                  <p>Salone delle Fontane dell’Eur, via Ciro il Grande 10, Roma</p>
                </div>
                <div class="col-md-5">
                 <img src="https://www.mbnews.it/wp-content/uploads/2017/07/misinto-bierfest-festa-chiusura3-2017.jpg" alt="" class="img-fluid" width="500" height="500">

                </div>
              </div>

              <hr class="featurette-divider">

              <div class="row featurette">
                <div class="col-md-7 order-md-2">
                  <h2 class="featurette-heading text-color">Altri eventi <span class="text-color2">a tema!</span></h2>
                  <p class="lead">Su questo filone si inserisce, poco dopo l’epifania, la Notte delle Botti, a Torino: un evento singolare con protagoniste assolute le birre ripassate in legno. È dedicato invece alle birra alla frutta il Drunken Fruit Festival, organizzato da Vanni Borin del Drunken Duck prima nel suo pub e oggi sempre a Quinto Vicentino (VI), ma nell’affascinante Villa Ca’ Pigioni. Il tema è sottolineato da ogni spina, in ogni laboratorio, e oltre ad un grande successo di pubblico, inizia ad attirare l’attenzione di birrai stranieri. Luigi D’Amelio – meglio noto ai più come Schigi – organizza nel locale di Extraomnes a Castellanza (VA) il Tripel Pride, a esaltare uno stile belga un po’ sottovalutato negli ultimi tempi. Oltre al Pils Pride il Birrificio Italiano, con il suo spin off Klanbarrique, organizza nei primi giorni di luglio Robe da Chiodi, con il chiaro intento di festeggiare le birre che hanno soggiornato in botte. A cavallo tra agosto e settembre a Mantova va in scena Via Latta, festival dedicato esclusivamente alle birre in lattina che tanto successo stanno avendo anche in Italia. Sempre più birrifici producono la propria versione di Harvest (birra prodotta con luppolo fresco e in fiore) e su questo fenomeno Arrogant Pub e Italian Hops Company hanno creato il Fresh Hop Festival a Reggio Emilia. </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="https://images.unsplash.com/photo-1546622891-02c72c1537b6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80" alt="" class="img-fluid" width="500" height="500">

                </div>
              </div>

              <hr class="featurette-divider">

              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading text-color2">Come degustare <span class="text-color">una birra</span></h2>
                  <p class="lead">Tutti gli esseri umani (con poche patologiche eccezioni) sono dotati di uno strumento gusto-olfattivo molto potente. Pochi però lo esercitano, soprattutto quando bevono una birra. Purtroppo questa effervescente e storica bevanda è sempre stata raccontata come un prodotto minore, da bere d’estate per combattere la sete, al pari di un tè freddo o di una bibita gassata. Chi si mette ad annusare un’aranciata?!? Per fortuna oggi molte cose sono cambiate e sappiamo bene che la birra rappresenta una galassia molto ampia, in cui vengono coperti quasi tutti i territori gustativi, che non deve temere nessun timore reverenziale con nessun altro prodotto ma che, anzi, al contrario, deve pretendere la massima attenzione di chi la produce, la distribuisce, la somministra e di chi, finalmente, la consuma.</p>
                </div>
                <div class="col-md-5">
                    <img src="https://images.unsplash.com/photo-1569937714610-ecd60826aa57?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1975&q=80" alt="" class="img-fluid" width="500" height="500">

                </div>
              </div>

              <hr class="featurette-divider">

              <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->



              <p class="float-end "><a href="#" class="text-color2">Back to top</a></p>

          </main>

</x-layout>
