 <div class="vertical-menu">

     <div data-simplebar class="h-100">

         <!-- User details -->


         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <!-- Left Menu Start -->
             <ul class="metismenu list-unstyled" id="side-menu">
                 <li class="menu-title">Menu</li>

                 <li>
                     <a href="{{ url('/dashboard') }}" class="waves-effect">
                         <i class="ri-home-fill"></i>
                         <span>Tableau de bord</span>
                     </a>
                 </li>


                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-hotel-fill"></i>
                         <span>Gérer les fournisseurs</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('supplier.all') }}">Tous Fournisseur</a></li>

                     </ul>
                 </li>


                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-shield-user-fill"></i>
                         <span>Gérer les clients</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('customer.all') }}">Tous les clients</a></li>
                         <li><a href="{{ route('credit.customer') }}">Clients à crédit</a></li>

                         <li><a href="{{ route('paid.customer') }}">Clients payants</a></li>
                         <li><a href="{{ route('customer.wise.report') }}">Rapport client avisé</a></li>

                     </ul>
                 </li>


                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-delete-back-fill"></i>
                         <span>Gérer les unités</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('unit.all') }}">Toutes les unités</a></li>

                     </ul>
                 </li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-apps-2-fill"></i>
                         <span>Gérer les catégories</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('category.all') }}">Toutes les catégories</a></li>

                     </ul>
                 </li>


                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-reddit-fill"></i>
                         <span>Gérer les produits</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('product.all') }}">Tous les produits</a></li>

                     </ul>
                 </li>


                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-oil-fill"></i>
                         <span>Gérer l'achat</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('purchase.all') }}">Tout achat</a></li>
                         <li><a href="{{ route('purchase.pending') }}">Approbation d'achat</a></li>
                         <li><a href="{{ route('daily.purchase.report') }}">Rapport d'achat quotidien</a></li>

                     </ul>
                 </li>


                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-compass-2-fill"></i>
                         <span>Gérer la facture</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('invoice.all') }}">Toutes les factures</a></li>
                         <li><a href="{{ route('invoice.pending.list') }}">Facture d'approbation</a></li>
                         <li><a href="{{ route('print.invoice.list') }}">Imprimer la liste des factures</a></li>
                         <li><a href="{{ route('daily.invoice.report') }}">Rapport de facturation quotidien</a></li>

                     </ul>
                 </li>







                 <li class="menu-title">Stock</li>

                 <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                         <i class="ri-gift-fill"></i>
                         <span>Gérer les stocks</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                         <li><a href="{{ route('stock.report') }}">Rapport d'inventaire</a></li>
                         <li><a href="{{ route('stock.supplier.wise') }}">Fournisseur / Produit </a></li>

                     </ul>
                 </li>
             </ul>
         </div>
         <!-- Sidebar -->
     </div>
 </div>
