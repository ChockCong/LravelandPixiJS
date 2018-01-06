<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.2.2/pixi.min.js"></script>--}}
    <script type="text/javascript" src="js/pixi.js"></script>
</head>

</body>
<body>
<script>
    // var stage = new PIXI.Stage();
    // var renderer = PIXI.autoDetectRenderer(800, 1000);
    // document.body.appendChild(renderer.view);
    //
    // var img = new Image();
    // img.src = 'images/bunny.png';
    // img.onload = function(){
    //     var baseTexture = new PIXI.BaseTexture(this);
    //     var texture = new PIXI.Texture(baseTexture);
    //     var sprite = new PIXI.Sprite(texture);
    //     stage.addChild(sprite);
    //     renderer.render(stage);
    // }

    // var renderer = PIXI.autoDetectRenderer(256, 256, {antialias: false, transparent: false, resolution: 1});
    // // 新增至頁面
    // document.body.appendChild(renderer.view);
    // // 創建 Stage
    // var stage = new PIXI.Container();
    // // 以 Render 去渲染 Stage
    //
    // renderer.render(stage);

    // renderer.view.style.position = "absolute";
    // renderer.view.style.display = "block";
    // renderer.autoResize = true;
    // renderer.resize(window.innerWidth, window.innerHeight);

    // renderer.backgroundColor = 0x061639; //背景颜色

    // renderer.autoResize = true;
    // renderer.resize(512, 512); //重设大小

    var stage = new PIXI.Container(),
        renderer = PIXI.autoDetectRenderer(256, 256);
    document.body.appendChild(renderer.view);
    //加载渲染器

    PIXI.loader
        .add("images/bunny.png")
        .on("progress",loadProgressHandler)
        .load(setup);
    //加添加图片到纹理缓存

    function setup() {

        // var fight = new PIXI.Sprite(
        //     PIXI.loader.resources["images/bunny.png"].texture
        // );

        var texture =  PIXI.loader.resources["images/bunny.png"].texture;  //load图片

        var rectangle = new PIXI.Rectangle(192, 128, 64, 64); //抠图坐标

        texture.frame = rectangle;  //图片抠图

        //Create the sprite from the texture
        var fight = new PIXI.Sprite(texture);  //图片加入精灵

        // fight.x = 96;
        // fight.y = 96;
        // fight.scale.set(0.5, 0.5);
        //
        // fight.rotation = 0.5;

        stage.addChild(fight);              //精灵加入舞台
        // stage.removeChild(fight);
        renderer.render(stage);             //舞台加入渲染器
        console.log("all loaded");
    }
    function loadProgressHandler(loader, resource) {
        // document.body.appendChild(loader.progress);

        console.log("loading: " + resource.url);

        console.log("progress: " + loader.progress + "%");

        //console.log("loading: " + resource.name);
    }
    renderer.view.style.position = "absolute";
    renderer.view.style.display = "block";
    renderer.autoResize = true;
    renderer.resize(window.innerWidth, window.innerHeight); //调整渲染器大小

</script>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>PixiTest</title>
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.2.2/pixi.min.js"></script>--}}
    <script type="text/javascript" src="{{asset('js/pixi.js')}}"></script>
    </head>
<body>
<script>
     var Container = PIXI.Container,
        autoDetectRenderer = PIXI.autoDetectRenderer,
        loader = PIXI.loader,
        resources = PIXI.loader.resources,
        TextureCache = PIXI.utils.TextureCache,
        Texture = PIXI.Texture,
        Sprite = PIXI.Sprite;

    //Create a Pixi stage and renderer and add the
    //renderer.view to the DOM
    var stage = new Container(),
        renderer = autoDetectRenderer(512, 512);
    document.body.appendChild(renderer.view);

    //load a JSON file and run the `setup` function when it's done
    loader
        .add([{url:"images/dungeon.png"},
            {url:'images/explorer.png'},
            {url:'images/treasure.png'}])
        .load(setup);

    //Define variables that might be used in more
    //than one function
    var dungeon, explorer, treasure, door, id;

    function setup() {

        //There are 3 ways to make sprites from textures atlas frames

        //1. Access the `TextureCache` directly
        var dungeonTexture = TextureCache["images/dungeon.png"];
        dungeon = new Sprite(dungeonTexture);
        stage.addChild(dungeon);//背景

        var exploreTexture = TextureCache["images/explorer.png"];
        explorer = new Sprite(exploreTexture);
        explorer.x = 68;
        explorer.y = stage.height / 2 - explorer.height / 2;
        stage.addChild(explorer);//主角

        // id = PIXI.loader.resources["images/treasureHunter.json"].textures;
        // treasure = new PIXI.Sprite(id["images/treasure.png"]);
        var treasureTexture = TextureCache["images/treasure.png"];
        treasure = new Sprite(treasureTexture);
        //Position the treasure next to the right edge of the canvas
        treasure.x = stage.width - treasure.width - 48;
        treasure.y = stage.height / 2 - treasure.height / 2;
        stage.addChild(treasure);//宝藏




        renderer.render(stage);


    }

</script>

</body>
</html>
