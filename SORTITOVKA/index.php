<?php
 
 $server = 'localhost';
 $user = 'root';
 $pass ='';
 $db = 'game_market';
 
 $link = mysqli_connect($server,$user,$pass); 

  
 

$sorting = $_GET['sort'];

switch ($sorting)
{
    case 'price-asc';
    $sorting = 'price ASC';
    $sort_name = 'From cheap to expensive';
    break;

    case 'price-desc';
    $sorting = 'price DESC';
    $sort_name ='From expensive to cheap';
    break;

    case 'title-asc';
    $sorting = 'title_id';
    $sort_name ='By title (starting from A)';
    break;

    case 'title-desc';
    $sorting = 'title_id DESC';
    $sort_name ='By title (starting from Z)';
    break;

    case 'popular';
    $sorting = 'count DESC';
    $sort_name ='Popular';
    break;

    case 'news';
    $sorting = 'game_realise_id DESC';
    $sort_name ='News';
    break;

    case 'genre';
    $sorting = 'genres ASC';
    $sort_name ='By genre (starting from A)';
    break;

    case 'genre';
    $sorting = 'genres DESC';
    $sort_name ='By genre (starting from Z)';
    break;

    case 'author-asc';
    $sorting = 'author_id ASC';
    $sort_name ='By author (starting from Z)';
    break;

    case 'author-desc';
    $sorting = 'author_id DESC';
    $sort_name ='By author (starting from Z)';
    break;

    default:
    $sorting = 'game_id DESC';
    $sort_name ='No sorting';
    break;
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="script.js"></script>
</head>
<body>
<div class='header'>
    <div class='upFooter'><p style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Internet game shop</p></div>
    <div class = 'materials'>
        

        <ul id = 'option_list'>

            <li>Sorting</li>

            <li><a id = 'select_sort'><?php echo $sort_name ?></a></li>
            <ul id = 'sorting_list' >

                <li><a href="index.php?sort=price-asc">From cheap to expensive</a></li>
                <li><a href="index.php?sort=price-desc">From expensive to cheap </a></li>
                <li><a href="index.php?sort=title-asc">By title (starting from A)</a></li>
                <li><a href="index.php?sort=title-desc">By title (starting from Z)</a></li>
                <li><a href="index.php?sort=popular">Popular</a></li>
                <li><a href="index.php?sort=news">New</a></li>                
                <li><a href="index.php?sort=genre">By genre (starting from A)</a></li>
                <li><a href="index.php?sort=genre">By genre (starting from Z)</a></li>
                <li><a href="index.php?sort=author-asc">By author(staring from A)</a></li>
                <li><a href="index.php?sort=author-desc">By author(staring from Z)</a></li>


            </ul>

        </ul>

        <ul id = 'block_tovar_grid'>

            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";

                // Create connection
                if($conn = new mysqli($servername, $username, $password)) 

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                echo "Connected successfully";
                $result = mysqli_query($link,"SELECT * FROM game  WHERE visible = '1' ORDER BY $sorting");
             
                do
                {
                    echo '
                    <li>
                        <div class = "block_images_grid">
                            <img src="/SORTIROVKA/'.$row["image"].'" alt="">;
                        </div>
                        <p class = "style_title_grid"><a href="">'.$row["tilte"].'</a></p>
                        <ul class = "reviews_and_comments_grid">
                        <li><img src="../SORTIROVKA/images (1).png" alt=""></li>
                        <li><img src="../SORTIROVKA/w512h5121377939697185079bubblecommentstreamlinetalk.png" alt=""></li>
                        </ul>
                        <a class = "add_cart_style_grid" href=""></a>
                        <p class = "style_price_grid"><strong></strong>руб</p>
                        <div class = "description">
                        '.$row["description"].'
                        </div>
                    </li>
                    ';
                } 
                while($row = mysqli_fetch_array($result)); 
               
            ?>
        </ul>
    </div>
</div>
</body>
</html>

