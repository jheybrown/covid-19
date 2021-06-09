<?php
include "../theme/layout/header.php";
include "../theme/layout/sidebar.php";
?>
    <!-- BEGIN: Main Menu-->
    
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
        




                <section id="default-breadcrumb">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><i class="bx bxs-buildings"></i>Gestão dos Quartos</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#"><i class="bx bx-home"></i>Principal</a></li>
                                                
                                                <li class="breadcrumb-item active" aria-current="page">Quartos</li>   
                                                <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
    <a href="paciente_add.php" class="btn btn-success glow mr-1 mb-1"><i class="bx bxs-buildings"></i>
                                                    <span class="align-middle ml-25">Novo Quarto</span></a>
  </li>
 </ul>
                                            </ol>

                                           
                                       
                                        </nav>
                                       

                                        
                                        
         
                                    
                                        <div class="table-responsive">
                                            <table class="table table-striped zero-configuration">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th>Nome</th>
                                                        <th>Capacidade</th>
                                                        <th>Ocupação</th>                                                    
                                                        <th>Accao</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    <?php
require ('../function/db/config.php');
try {

  $sql = "
  select *
  from
  quarto
  order by id desc

  ";
 
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $q->fetch()){
                        echo "<tr>";
                            
                            
                            
                            
                            echo "<td>".$row['nome']."</td>";
                            echo "<td>".$row['capacidade']."</td>";
                            
                            echo '<td>
                            <div class="progress progress-bar-danger mb-0 ">
                                            <div class="progress-bar progress-label" role="progressbar" aria-valuenow="'.$row['ocupacao'].'" aria-valuemin="'.$row['ocupacao'].'" aria-valuemax="100" style="width:'.$row['ocupacao'].'%"></div>
                                        </div>
                            ';


                            echo'</td>';

                            


                            echo "<td>
                            <a target='_blank' href='paciente_edit.php?id=".$row['id']."' class='text-success'><i class='bx bxs-edit-alt'></i></a>
                            <a href='#' class='text-danger'><i class='bx bx-x'></i></a>
                            </td>";
                        echo "</tr>";
     }
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
                                                    
                                                </tbody>
                                              
                                            </table>
                                        </div>
                                    </div>
                    </div>
                </section>





                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               




                



            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- demo chat-->
 
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-left d-inline-block">2021 &copy; PGC</span><span class="float-right d-sm-inline-block d-none">Desenvolvido<i class="bx bxs-heart pink mx-50 font-small-3"></i>por<a class="text-uppercase" href="https://1.envato.market/pixinvent_portfolio" target="_blank">MozAds MultiService</a></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="bx bx-up-arrow-alt"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->

<?php
include "../theme/layout/footer.php";
?>
 

</body>
<!-- END: Body-->

</html>