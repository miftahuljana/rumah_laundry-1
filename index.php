<?php 
	require_once('_header.php'); 
	if (isset($_SESSION['login']) == '') {
		header("Location: login.php");
		exit();
	}
?>

<div id="main" class="main-content">
    <div class="container">
        <div class="baris">
            <div class="col col-1">
                <div class="card">
                    <div class="card-body">
                        <div class="card-panel">
                            <div class="panel-header">
                                <p>Total Order</p>
                                <h2><?= jmlOrder(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-1">
                <div class="card">
                    <div class="card-body">
                        <div class="card-panel">
                            <div class="panel-header">
                                <p>Jumlah Paket Tersedia</p>
                                <h2><?= jmlPaket(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-1">
                <div class="card">
                    <div class="card-body">
                        <div class="card-panel">
                            <div class="panel-header">
                                <p>total order</p>
                                <h2>Data 3</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-1">
                <div class="card">
                    <div class="card-body">
                        <div class="card-panel">
                            <div class="panel-header">
                                <p>jumlah paket tersedia</p>
                                <h2>Data 4</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="main" class="main-content">
    <div class="container">
        <div class="baris">
            <div class="col col-1">
                <div class="card">
                    <div class="card-body">
                        <div class="card-panel">
                            <div class="panel-header">
                                <p>Total Order</p>
                                <h2><?= jmlOrder(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col col-1">
                <div class="card">
                    <div class="card-body">
                        <div class="card-panel">
                            <div class="panel-header">
                                <p>Box 4</p>
                                <h2>Data 4</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

<div id="main" class="main-content">
    <div class="container">
        <div class="baris">
            <div class="col col-1">
                <div class="card">
                    <div class="card-body">
                        <div class="card-panel">
                            <div class="panel-header">
                                <p>Total Order</p>
                                <h2><?= jmlOrder(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-1">
                <div class="card">
                    <div class="card-body">
                        <div class="card-panel">
                            <div class="panel-header">
                                <p>Jumlah Paket Tersedia</p>
                                <h2><?= jmlPaket(); ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-1">
                <div class="card">
                    <div class="card-body">
                        <div class="card-panel">
                            <div class="panel-header">
                                <p>total order</p>
                                <h2>Data 3</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-1">
                <div class="card">
                    <div class="card-body">
                        <div class="card-panel">
                            <div class="panel-header">
                                <p>jumlah paket tersedia</p>
                                <h2>Data 4</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="center">
    <div class="baris">
        <div class="col col-1">
            <div class="card">
                <div class="card-body">
                    <div class="card-panel">
                        <div class="panel-header">
                             <p>Total Order</p>
                            <h2><?= jmlOrder(); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>




			<!-- Daftar Order Cuci Komplit -->
			<div class="baris">
				<?php require_once('daftar_order/daf_or_ck.php');?>
			</div>

			<!-- Daftar Order Cuci Kering/Dry Clean -->
			<div class="baris">
				<?php require_once('daftar_order/daf_or_dc.php');?>
			</div>

			<!-- Daftar Order Cuci Satuan -->
			<div class="baris">
				<?php require_once('daftar_order/daf_or_cs.php');?>
			</div>

		</div>
	</div>
