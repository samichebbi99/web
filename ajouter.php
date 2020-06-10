   <?PHP

   include 'header.php';?>

      <!-- Sidebar Menu -->
        <aside class="main-sidebar">

      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
       <section class="content">

      <!-- Your Page Content Here -->
      <button type="submit" class="btn btn-primary">Ajouter un produit</button>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Les produits disponible</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover" width="300">
                <thead>
                <tr>
                  <th>Reference</th>
                  <th>Nom du produit</th>
                  <th>Description</th>
                  <th>Prix</th>
                  <th>id Categorie</th>
                  <?PHP
foreach($listeProduits as $row){

                       echo '
                                <tr>
                                <td><span class="">'.$row["reference"].'</span></td>
                                <td><span class="">'.$row["nom_produit"].'</span></td>
                                <td><span class="">'.$row["prix"].'</span></td>
                                <td><span class="">'.$row["description"].'</span></td>
                                <td><span class="">'.$row["id_categorie"].'</span></td>

                                <td><img src="'.$row['image'].'"> </img></td>
                                </tr>
                            ';}?>
                  <th><input type="submit" class="btn btn-primary" name="modifier" value="modifier"></th>
                  <th><button type="submit" class="btn btn-primary">supprimer</button></th>
                </tr>
                </thead>
            
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
    </section>

      <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      HamhamaFood
    </div>

    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 <a href="#">HamhamaFood</a>.</strong> All rights reserved.
  </footer>