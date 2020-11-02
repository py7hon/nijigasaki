<?php
$data  = @json_decode(file_get_contents('https://apicr.vercel.app/?id='.$_GET['id']), true);
$episode = $data['metadata']['episode_number'];
$thumb = $data['thumbnail']['url'];
$desc = $data['metadata']['description'];
if(isset($_GET['id'])){
?>
<html>
<head>
<title>Love Live! Nijigasaki High School Idol Club - Episode <?= $episode?> | Lontong</title>
<link rel="stylesheet" href="https://lontong.unblock.my.id/assets/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://lontong.unblock.my.id/assets/js/jquery-3.5.1.slim.min.js "></script>
<script src="https://lontong.unblock.my.id/assets/js/popper.min.js"></script>
<script src="https://lontong.unblock.my.id/assets/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="https://lontong.unblock.my.id/assets/favicon.png" type="image/x-icon">
<link rel="icon" href="https://lontong.unblock.my.id/assets/favicon.png" type="image/x-icon">
<meta property="og:site_name" content="Lontong"/>
<meta property="og:type" content="tv_show"/>
<meta property="og:image" content="<?= $thumb ?>"/>
<meta name="title" property="og:title" content="Love Live! Nijigasaki High School Idol Club - Episode <?= $episode?> | Lontong">
<meta name="description" property="og:description" content="<?= $desc ?> | Lontong">
</head>
<body style="background-color: #1b1b1c">
<div class="container">
    <div class="card" style="box-shadow: 5px 0px 9px -5px rgba(0,0,0,0.21);background-color: #323233">
        <div class="card-header text-white" style="background-color: #000">
            <h4>Love Live! Nijigasaki High School Idol Club - Episode <?= $episode?></h4>
        </div>
        <div class="card-body" style="background-color: #000">
                    <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://player-cr.vercel.app/?id=<?= $_GET['id']?>&lang=enUS" scrolling="no" frameborder="0" allowfullscreen></iframe>
            </div>
                 </div>
        <div class="card-footer text-white" style="background-color: #000">
                <div class="col-md-4 text-center">
                    <a href="/" class="btn btn-danger align-content-center">List of episodes</a>
                </div>
            </div>
        <hr>
</div>
</body>
</html>
<?php }else{
header('location: /');
}
?>
