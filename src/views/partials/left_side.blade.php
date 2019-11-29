<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
     
        <div class="clearfix"></div>
        <!--- Profile -->
        <div class="profile-info">
            <div class="col-xs-4">
              <a href="" class="rounded-image profile-image"><img src=""></a>
            </div>
            <div class="col-xs-8">
                <div class="profile-text">Tableau de bord</div>
              
            </div>
        </div>
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
            <li class='has_sub'>
            <a href='javascript:void(0);'>
            <i class='icon-home-3'></i>
            <span>Dashboard</span> 
            <span class="pull-right">
            <i class="fa fa-angle-down"></i>
            </span>
            </a>
            <ul>
            <li>
            <a href='{{ route('liste') }}' id="active-home">
            <span>Dashboard v1</span>
            </a>
            </li>
            </ul>
            </li>
            <li class='has_sub'>
                    <a href='javascript:void(0);'>
                    <i class='fa fa-table'></i>
                    <span>Catégories</span> 
                    <span class="pull-right">
                    <i class="fa fa-angle-down"></i>
                    </span>
                    </a>
                    <ul>
                    <li>
                    <a href='{{ route('categorie_liste') }}' id="active-entres-table">
                    <span>Liste</span>
                    </a>
                    </li>
                    <li>
                    <a href='{{route('categorie_create')}}' id="active-entres-add">
                    <span>Ajouter</span>
                    </a>
                    </li>
                    </ul>
                    </li>            
            <li class='has_sub'>
            <a href='javascript:void(0);'>
            <i class='fa fa-table'></i>
            <span>Produits</span> 
            <span class="pull-right">
            <i class="fa fa-angle-down"></i>
            </span>
            </a>
            <ul>
            <li>
            <a href='{{ route('liste') }}' id="active-entres-table">
            <span>Liste</span>
            </a>
            </li>
            <li>
            <a href='{{ route('create') }}' id="active-entres-add">
            <span>Ajouter</span>
            </a>
            </li>
            </ul>
            </li>
             <li class='has_sub'>
            <a href='javascript:void(0);'>
            <i class='fa fa-table'></i>
            <span>Articles</span> 
            <span class="pull-right">
            <i class="fa fa-angle-down"></i>
            </span>
            </a>
            <ul>
            <li>
            <a href='' id="active-sorties-table">
            <span>Liste</span>
            </a>
            </li>
            <li>
            <a href='' id="active-sorties-add">
            <span>Ajouter</span>
            </a>
            </li>
            </ul>
            </li>
            </ul>                  
              <div class="clearfix"></div>
        </div>
    <div class="clearfix"></div>
    
</div>
    
</div>
