<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <link rel="import" href="files.html">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-fixed-top bg-white navbar-light border-bottom elevation-1">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
            </ul>
            <span class="ml-2" style="font-weight: 600; font-size: x-large; color: #515151">Comment Sentiment Analysis System</span>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-info elevation-4">
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item mt-3">
                            <a class="nav-link elevation-2" style="color: #fff; background-color: rgba(255,255,255,.1)">
<i class="fa fa-user-o nav-icon" style="font-size:24px;color:White"></i><p>User</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="index.html" class="nav-link "><i class="fa fa-home nav-icon"></i><p>Home</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="reviews.php" class="nav-link">
                                  <i class="fa fa-rocket nav-icon" style="font-size:24px"></i><p>Reviews</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="sentiment.php" class="nav-link active">
                                <i class="fa fa-user-secret nav-icon" style="font-size:24px"></i><p>Sentiment</p></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
    </div>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid"></div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card card-info card-outline elevation-2">
                        <div class="card-header">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#InstEng"><small style="font-size: medium; font-weight: 600">Sentiment Analyazed Reviews</small></a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="tab-content">
                                        <div id="InstEng" class="active tab-pane" style="padding-top: 1%">
                                    <?php
                                        include 'database.php'; 
                                        $query = 'select id, sentiment,label,keywords,created_on from sentiments';
                                        $result = pg_query($query);
                                        $i = 0; ?>
                                        <div class="table-responsive ">
                                        <html><body><table  class="table table-hover table-condensed">
                                        <th>ID</th><th>Sentiment</th><th>Label</th><th>Attributes</th><th>Analyzed Date</th>
                                    <?php
                                        echo '</tr>';
                                        $i = 0;
                                        while ($row = pg_fetch_row($result)) 
                                        {
                                            echo '<tr>';
                                            $count = count($row);
                                            $y = 0;
                                            while ($y < $count)
                                            {
                                                $c_row = current($row);
                                                echo '<td>' . $c_row . '</td>';
                                                next($row);
                                                $y = $y + 1;
                                            }
                                            echo '</tr>';
                                            $i = $i + 1;
                                        }
                                        pg_free_result($result);
                                        echo '</table></body></html>';
                                    ?>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</div>
</body>
</html>

