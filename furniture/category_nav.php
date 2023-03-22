<div class="main-nav">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg nav-line">
                <a class="navbar-brand bg-dark logo-with-background" href="../index.php"><img ssrc="<?php echo validate_image($_settings->info('logo')) ?>"></a>
                <form class="form-inline" id="search-form">
                    <div class="input-group">
                        <input class="form-control form-control-sm form " type="search" placeholder="Search" aria-label="Search" name="search"  value="<?php echo isset($_GET['search']) ? $_GET['search'] : "" ?>"  aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-light btn-sm m-0" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link wow fadeInUp" href="../index.php#header">HOME</a>
                        </li>
                        <?php 
                            $cat_qry = $conn->query("SELECT * FROM categories where status = 1");
                            while($crow = $cat_qry->fetch_assoc()):
                                $sub_qry = $conn->query("SELECT * FROM sub_categories where status = 1 and parent_id = '{$crow['id']}'");
                        ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link text-dark dropdown-toggle" id="navbarDropdown<?php echo $crow['id'] ?>" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                    <?php echo $crow['category'] ?>
                                    <img src="<?php echo $crow['image'] ?>" class="img-fluid" alt="<?php echo $crow['category'] ?>">
                                </a>
                                <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown<?php echo $crow['id'] ?>">
                                    <div class="row mx-0">
                                        <?php while($srow = $sub_qry->fetch_assoc()): ?>
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <a class="dropdown-item border-bottom" href="products.php?p=products&c=<?php echo md5($crow['id']) ?>&s=<?php echo md5($srow['id']) ?>">
                                                    <img src="<?php echo $srow['image'] ?>" class="img-fluid" alt="<?php echo $srow['sub_category'] ?>">
                                                    <?php echo $srow['sub_category'] ?>
                                                </a>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>