<html>
    <head>
        <meta charset= "UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h1>Artikel Terbaru</h1>
        <a href ="<?php echo site_url('blog/add');?>"> + Tambah Artikel 
        <?php foreach ($blog as $key=>$blog):?>
        <div class = "Blog"></div>
        <h2>
            <a href ="<?php echo site_url('blog/detail/'.$blog['url']);?>">
            <?php echo $blog['title'];?>
        </h2>
        <h2><a href ="<?php echo site_url('blog/edit'.$blog['id']);?>"> Edit Artikel</h2>
        <?php echo $blog['content'];
        endforeach;
        ?>
    </body>
</html>
