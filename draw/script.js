const canvas = document.querySelector("canvas"),
toolBtns = document.querySelectorAll(".tool"),
fillColor = document.querySelector("#fill-color"),
sizeSlider = document.querySelector("#size-slider"),
colorBtns = document.querySelectorAll(".colors .option"),
colorPicker = document.querySelector("#color-picker"),
clearCanvas = document.querySelector(".clear-canvas"),
saveImg = document.querySelector(".save-img"),
ctx=canvas.getContext("2d");

//global variable with defaut value
let prevMouseX, prevMouseY, snapshot,
isDrawing = false;
SelectedTool="brush",
brushWidth = 5;
SelectedColor="#000";

const setCanvasBackground = () => {
    //setting whole background to while , so the dowloanded img background will be white
    ctx.fillStyle= "#fff";
    ctx.fillRect(0, 0, canvas.width, canvas.height);
    ctx.fillStyle=SelectedColor;//setting fillstyle back to the selectedColor, it'll be the brush color
}
window.addEventListener("load",()=>{
    //setting canvas width/height.. offsetwidth/height returns viewable width/height of an element 
    canvas.width= canvas.offsetWidth;
    canvas.height=canvas.offsetHeight;
    setCanvasBackground();
});

const drawRect = (e) => {
    //if fillcolor isn't checked draw a rect with border else draw rect with background
    if(!fillColor.checked){
        //creating circle according to the mouse poiter
        return ctx.strokeRect(e.offsetX,e.offsetY, prevMouseX - e.offsetX, prevMouseY - e.offsetY);
    }
     ctx.fillRect(e.offsetX,e.offsetY, prevMouseX - e.offsetX, prevMouseY - e.offsetY);
};

const drawCircle = (e) => {
    
    ctx.beginPath(); // creating new path to draw circle
    //getting radius for circle according to the mouse pointer
    let radius = Math.sqrt(Math.pow((prevMouseX- e.offsetX), 2) + Math.pow((prevMouseY- e.offsetY), 2) );
    ctx.arc(prevMouseX, prevMouseY, radius, 0, 2 * Math.PI);//creating circle according to the mouse poiter
    fillColor.checked ? ctx.fill() : ctx.stroke();// if fillColor is checked fill circle else border circle
    
};
const drawTriangle = (e) =>{
    ctx.beginPath();// creating new path to draw Triangle
    ctx.moveTo(prevMouseX, prevMouseY);// moving Triangle to the mouse poiter
    ctx.lineTo(e.offsetX, e.offsetY);//creating bottom line of triangle
    ctx.lineTo(prevMouseX * 2 - e.offsetX, e.offsetY);//closing path of a triangle so the third line draw automatically
    ctx.closePath();
    ctx.stroke();
    fillColor.checked ? ctx.fill() : ctx.stroke();// if fillColor is checked fill circle else border triangle
    
}
const startDraw = (e) => {
    isDrawing = true;
    prevMouseX=e.offsetX;//passing current mouseX position as prevMouseX value
    prevMouseY=e.offsetY;//passing current mouseY position as prevMouseY value
    ctx.beginPath();// creating new path to draw
    ctx.lineWidth = brushWidth;// passing brushSize as line width
    ctx.strokeStyle = SelectedColor;//passing SelectedColor as stroke style
    ctx.fillStyle = SelectedColor;//passing SelectedColor as fill style
    //copying canvas data & passing as snapshot value.. this avoids drawing the image
    snapshot = ctx.getImageData( 0, 0 , canvas.width, canvas.height);
};

const drawing=(e)=>{
    if(!isDrawing) return;// if isDrawing is false return from here
   ctx.putImageData(snapshot, 0, 0);//adding copied canvas data to on this canvas

   if(SelectedTool==="brush"||SelectedTool==="eraser"){
    //if selected tool is eraser then set strokeStyle to while
    //to paint while color on to the existing canvas content else set the stroke color selected color
    ctx.strokeStyle = SelectedTool==="eraser"? "#fff" :SelectedColor;
    ctx.lineTo(e.offsetX,e.offsetY);//creating line according to the mouse pointer
    ctx.stroke();//drawing/filing line with color
   }else if(SelectedTool==="rectangle"){
    drawRect(e);
   }else if(SelectedTool==="circle"){
    drawCircle(e);
   }
   else if(SelectedTool==="triangle"){
    drawTriangle(e);
   } 
}
    

toolBtns.forEach(btn => {
    btn.addEventListener("click", ()=>{//adding click event to all tool option
        //removing active class from the previous option and adding on current clicked option
        document.querySelector(".options .active").classList.remove("active");
        btn.classList.add("active");
        SelectedTool = btn.id;
        console.log(SelectedTool);
    });
});

sizeSlider.addEventListener("change", () => brushWidth= sizeSlider.value);//passing slider value as brushSize

colorBtns.forEach(btn => {
    btn.addEventListener("click", ()=>{//adding click event to all color button
        document.querySelector(".options .selected").classList.remove("selected");
        btn.classList.add("selected");
        // pasing selected btn background color as selectedColor value
        SelectedColor = window.getComputedStyle(btn).getPropertyValue("background-color");
    });
});

colorPicker.addEventListener("change",()=>{
    colorPicker.parentElement.style.background=colorPicker.value;
    colorPicker.parentElement.click();
})
clearCanvas.addEventListener("click", ()=> {
    ctx.clearRect(0, 0, canvas.width, canvas.height)// cleaing whole canvas
    setCanvasBackground();
})
saveImg.addEventListener("click", ()=> {
    const link = document.createElement("a");//creating <a> element
    link.download=`${Date.now()}.jpg`;//passing current date as link downloand value
    link.href = canvas.toDataURL();// passing canvasData as link href value
    link.click();//clicking link to dowloand image
   
})
canvas.addEventListener("mousemove",drawing);
canvas.addEventListener("mousedown", startDraw);
canvas.addEventListener("mouseup", () => {isDrawing = false});