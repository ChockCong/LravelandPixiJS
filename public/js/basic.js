// 创建pixi的stage
var stage = new PIXI.Stage(0x222222);

// 创建一个渲染
var renderer = PIXI.autoDetectRenderer(400, 300);
// 添加到页面
document.body.appendChild(renderer.view);

requestAnimFrame( animate );