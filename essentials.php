<?php
session_start();
Init();

    ob_start();
    include('template/navbar.php');
    $template['navbar'] = ob_get_clean();

    ob_start();
    include('template/footer.php');
    $template['footer'] = ob_get_clean();

    ob_start();
    include('template/pannier.php');
    $template['pannier'] = ob_get_clean();
    
    ob_start();
    include('template/details.php');
    $template['details'] = ob_get_clean();
    
function ProductList(){
    $produits = [
        0 => [
            'title'=>'Rolex Or',
            'desc'=>'Super montre à porter au tour du poignet plaqué Or.',
            'desc_short'=>'Super montre à porter au tour du poignet.',
            'image'=>'https://www.montres-de-luxe.com/photo/art/large_x2/49563988-38518601.jpg?v=1599231870',
            'price'=>22000,
            'count'=>1,
        ],
        1 => [
            'title'=>'Montre casio',
            'desc'=>'Que ce soit le matin en allant à la boulangerie, pendant la journée au bureau ou le soir en sortant avec des amis... Aussi toujours trop long sur la recherche de la tenue adéquate ? Laissez une montre cool prendre votre décision ! Mettez d\'abord une montre vintage vraiment décontractée, puis détendez-vous et choisissez tout le reste. Jetez un coup d\'œil à CASIO Vintage maintenant et inspirez-vous. Les montres CASIO Vintage ajoutent une finition spéciale à n\'importe quelle tenue - du simple style professionnel à un look décontracté ou de fête.',
            'desc_short'=>'Montre à montrer en toute circonstance...',
            'image'=>'https://m.media-amazon.com/images/I/71Fg04fzkyS._AC_SS130_.jpg',
            'price'=>48.51,
            'count'=>1,
        ],
        2 => [
            'title'=>'Supreme XXL',
            'desc'=>'La montre reprend le design du modèle phare du joaillier suisse, la Five Time Zone qui indique l\'heure dans quatre fuseaux horaires',
            'desc_short'=>'La montre reprend le design du modèle phare du joaillier suisse',
            'image'=>'https://m.media-amazon.com/images/I/61LSeXJ55mL._AC_SS130_.jpg',
            'price'=>42.99,
            'count'=>1,
        ],
        3 => [
            'title'=>'Montre <b>ADIDAS</b> en Silicone Bleu',
            'desc'=>'Cette Montre ADIDAS se compose d\'un Boîtier Ovale de 38 mm et d\'un Bracelet en Silicone Bleu',
            
            'desc_short'=>'Cette Montre ADIDAS se compose d\'un Boîtier Ovale de 38 mm.',
            'image'=>'https://www.cleor.com/media/catalog/product/cache/98234b6f098e120d7f728f93649aac55/z/1/z102904-00_001_hsayslmwy11tx4pi.jpg',
            'price'=>66,
            'count'=>1,
        ],
 
    ];
    return $produits;
}
function displayArticle(){
    $articles = ProductList();

    ob_start();
        include('template/articles.php');
        $template = ob_get_clean();

    return $template;
}

function displayPannier(){
    
    if(isset($_SESSION['pannier'])){
        $pannier = $_SESSION['pannier'];
    } else {
        $pannier = [];
    }

    ob_start();
        include('template/articles.php');
        $template = ob_get_clean();

    return $template;
}
function Init(){
    if(!isset($_SESSION['pannier'])){
        $_SESSION['pannier'] = [];
    } 
}