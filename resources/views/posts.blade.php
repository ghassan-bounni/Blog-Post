<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/app.css" />
</head>
<body>
    <?php foreach ($posts as $post ) : ?>
    {{-- <article>
        <h1><a href="/posts/first-post">First Post</a></h1>

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus neque, quibusdam unde nulla consequatur, deserunt voluptas illo beatae dolores quo delectus illum minima eum aspernatur quia, molestiae ipsum atque iusto.
        Mollitia molestias minus, labore sapiente rerum distinctio? Temporibus alias delectus perspiciatis, enim qui quas dolorum aliquam amet officiis dolore incidunt cumque doloremque magnam voluptate, voluptatem doloribus reiciendis illum ipsa odit.
        Inventore ratione iure repellendus molestias, doloremque corrupti ipsa nihil, voluptates, accusantium totam perferendis dolor voluptate ipsum asperiores mollitia perspiciatis ducimus sunt quod aliquid consequatur deleniti iste ab. Officiis, dicta laborum?
        Eaque aliquid ab, temporibus a quisquam tenetur reiciendis veniam tempora quibusdam, recusandae dolore error laborum eligendi veritatis illum minus quas fugiat reprehenderit illo accusamus cupiditate iure fugit explicabo aspernatur? Esse!
        Esse labore doloribus quaerat repudiandae voluptate aliquid. Aliquam accusamus quod qui officia quasi nihil. Impedit dolor quibusdam, magni aliquam minus sint quas eius officia voluptatibus ipsa? Obcaecati sunt saepe vero.</p>
    </article> --}}
    <article>
        <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
        <?= $post->excerpt ?>
    </article>
    <?php endforeach; ?>
</body>
</html>