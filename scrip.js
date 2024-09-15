let images = ['https://file.hstatic.net/200000420363/file/slide-acer.jpg', 'https://file.hstatic.net/200000420363/file/kv_bts__w730xh461px_.png', 'https://file.hstatic.net/200000420363/file/slide_giga_7__1___1_-01.png','https://file.hstatic.net/200000420363/file/slide-veg.jpg','https://file.hstatic.net/200000420363/file/slide-fs-2024_1c6895bf90e7423599752f6988e0b063.jpg','https://file.hstatic.net/200000420363/file/slide-tong-hop-khuyen-mai-fix_9324e813246543fdb266d9053fdc6a61.jpg','https://file.hstatic.net/200000420363/file/slide-bts-3.jpg','https://file.hstatic.net/200000420363/file/thns-slide-730x461px.jpg'];
let index = 0;

function changeBackground() {
    index = (index + 1) % images.length;
    document.getElementById('itemimg0').style.backgroundImage = `url(${images[index]})`;
}

// Chuyển ảnh sau mỗi 3 giây
setInterval(changeBackground, 3000);