    function reImagen(srcData, width, height){
        var imageObj = new Image(),
            canvas = document.createElement("canvas"),
            ctx = canvas.getContext("2d"),
            xStart = 0,
            yStart = 0,
            aspectRadio,
            newWidth,
            newHeight;
        imageObj.src = srcData;
        canvas.width = width;
        canvas.height = height;
        aspectRadio = imageObj.height / imageObj.width;
        if(imageObj.height < imageObj.width) {
            //horizontal
            aspectRadio = imageObj.width / imageObj.height;
            newHeight = height,
            newWidth = aspectRadio * height;
            xStart = -(newWidth - width) / 2;
        } else {
            //vertical
            newWidth = width,
            newHeight = aspectRadio * width;
            yStart = -(newHeight - height) / 2;
        }

        ctx.drawImage(imageObj, xStart, yStart, newWidth, newHeight);
        return canvas.toDataURL("image/jpeg", 0.75);
    }