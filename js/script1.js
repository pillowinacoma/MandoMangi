var BG_COLOR;
var HEAD_TRANSPARENCY = 255;
var corvinus_skyline_font,huskystash;
var Y_gunspos,X_gunspos,X_npos,Y_npos,logoX,logoY;
var HEAD_SIZE = 300;
var lineW = 0;
var gnrLOGO;
var nothingindice = 0;
var gunNroses = "Mando Mangi";
var move = 0;
var titleInAction = 0;
var DBtextcount = -50;


function preload(){
	corvinus_skyline_font = loadFont("fonts/hirukobookalternate.otf");
	huskystash = loadFont("fonts/husky stash.ttf");
}
function setup(){
	logoX = -width/2, logoY = -height/2;
	X_npos = -10-width, Y_npos = 100 , X_gunspos = 0, Y_gunspos = 0;
	BG_COLOR = color(217,205,145);
	var header = createCanvas(windowWidth,windowHeight/5);
	header.parent('header');
	background(BG_COLOR);
}
function draw(){
	background(BG_COLOR);
	push();
		translate(0,height/2);
				textAlign(RIGHT,CENTER);
				textSize(height+height/2+height/4+height/8+X_gunspos/5);
				textFont(corvinus_skyline_font);
				fill(217,159,108,abs(X_gunspos/5));
				text(gunNroses,X_gunspos,Y_gunspos);DBtextcount++;
				textAlign(RIGHT,CENTER);
				textSize(height+height/2+height/4+X_gunspos);
				textFont(corvinus_skyline_font);
				fill(191,96,75,abs(X_gunspos/5));
				text(gunNroses,X_gunspos,Y_gunspos);DBtextcount++;
				textAlign(RIGHT,CENTER);
				textSize(height+height/2+X_gunspos/10);
				textFont(corvinus_skyline_font)
				fill(166,60,60,abs(X_gunspos/5));
				text(gunNroses,X_gunspos,Y_gunspos);DBtextcount++;
		textAlign(RIGHT,CENTER);
		textSize(height);
		textFont(corvinus_skyline_font);
		fill(64,20,44);
		titleInAction = width/2+textWidth(gunNroses);
		text(gunNroses,X_gunspos,Y_gunspos);
		X_gunspos+=width/110 - X_gunspos/100;
		move+=6;
		/*if(X_gunspos>10){
			fill(217,205,145,abs(move/3));
			textSize(height/2)
			textFont(huskystash);
			textAlign(LEFT);
			text("D",textWidth(""),0);
			if (X_gunspos >=width/8) {
				text("a",textWidth("D"),0);
				if (X_gunspos >=2*width/8) {
					text("t",textWidth("Da"),0);
					if (X_gunspos >=3*width/8) {
						text("a",textWidth("Dat"),0);
						if (X_gunspos >=4*width/8) {
							text(" B",textWidth("Data"),0);
							if (X_gunspos >=5*width/8) {
								text("a",textWidth("Data B"),0);
								if (X_gunspos >=6*width/8) {
									text("s",textWidth("Data Ba"),0);
									if (X_gunspos >=7*width/8) {
										text("e",textWidth("Data Bas"),0);
									}
								}
							}
						}
					}
				}
			}
		}*/
	pop();
}
function windowResized(){
	resizeCanvas(windowWidth-windowWidth/4,windowHeight/5);
}
function mouseWheel(event){
	X_gunspos += event.delta/10;
}
function mouseDragged(event){
	X_gunspos = mouseX*2;
}
