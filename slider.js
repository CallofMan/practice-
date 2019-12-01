"use strict";

var allImages = document.querySelectorAll(".images > .image");
var button;
for (let i = 0; i < allImages.length; i++) 
{

    button = document.createElement('div');
    button.classList.add('button');
        {
        button.style.width = "13px";
        button.style.height = "13px";
        button.style.margin = "15px 10px";
        button.style.border = "1px solid black";
        button.style.backgroundColor = "#FFFFFF";
        button.style.borderRadius = "100%";
        button.style.cursor = "pointer";
        }
    button.addEventListener('click', function () 
    {
        imagesHide(i);
    });
    document.querySelector(".images > .buttons").appendChild(button);
}

var allButtons = document.querySelectorAll(".images > .buttons > .button");

function imagesHide(x) 
{
    for (let j = 0; j < allImages.length; j++) 
    {
        if (x != j) 
        {
            allImages[j].style.display = "none";
        } 
        else 
        {
            allImages[j].style.display = "flex";
        }
    }
}

imagesHide(0);