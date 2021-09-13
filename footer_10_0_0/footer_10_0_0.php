<?php
	$path = get_template_directory_uri();
    $path = $path.'/Module/Footer/footer_10_0_0';
    if($check == 0){
        $css_inline .= '
            <style>
                .footer_10_0_0-icon, .footer_10_0_0__social a, .footer_10_0_0Item-city__contact a::before {
                    background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEUAAAA0CAYAAADc8/VNAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTM4IDc5LjE1OTgyNCwgMjAxNi8wOS8xNC0wMTowOTowMSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTcgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjBFNDhCQzI1QTZBQTExRThCRTk1OUMyMDA4NzJENkQ3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjBFNDhCQzI2QTZBQTExRThCRTk1OUMyMDA4NzJENkQ3Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MEU0OEJDMjNBNkFBMTFFOEJFOTU5QzIwMDg3MkQ2RDciIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MEU0OEJDMjRBNkFBMTFFOEJFOTU5QzIwMDg3MkQ2RDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz68fatpAAAEU0lEQVR42uxaa2wMURSeKkIRtNKqV1KPkKAhlPX4gdCtRzx+aPxu+kOilcqqkCJB+0dsFCFEgiAhkZBGPCohHhUtEX5IpN6tPoIqTZuuVHR9x56N27EzuzNzt7sjc5Iv997pnbNnvt5z7jl3JsHv9yuO9JQ+DgUOKQ4pZqWvOEjwNNO4EMgDpgE+4DlwxO9NvxCJQugYg+Y2cB737LMjKQnBQIuH6YemElisMZeI2RwBIXeBCcAPYDzuabaz+xSrCKGH6hLGhXjolWH0XWdCSAYAu+0eU/KF/jkgGUgBbgrXt4TRN101zgeRKXYmJUPon8ay9wEd6B8Wrs8Ko69WNb4PfLMzKd+F/nyhn60xJ5RcVo09ILbbzqSID1SKZX8LqEG/SLh+MYy+YxyLgrLD7jGllLfgoCwD5gjjFmC/njKsigY0e4RLuSDWY1tS8EDv0ezVmVuEOZHEhwPAI3EMYoqFbTsJmG2LPEVI3p4Cmap5N0DIioiVeppHoqkStmeSS7zSjvIKvAcUQO+LuCaFHygLTbWwiii4ToHxnwwpDiRyd4BJOtN+AeXQvTWuax8Y+ES1DZcYJUSILwuAhzrTEoFVdikIdwH17ErHzSoHMV/QLAJ2qoJ4UN4CS+PefYTln4PmK68c6z/kaU5HswlYyy5FheY66G+yDSnOeYojDikOKQ4pDilRk55ntHlVtFV6ATfQ36JuOrWr/HN8cGrha83tL4+qAWUcsBGYC6QBg9m2YDvIpA0dnDW3Cy0loo85/6qHbdpbMhNC6X2yZOJbAZcWMfjdDDZyRC8vCKr6s2DXBz338UaBEIV1enX+fjAGhCj8m+XhYoo7iga4NVYJuc2aGIaP1WyDZkwxG0PeASeBV0Dw6JFiw/YIdC+JdUbPNpzRDLQm5CqwAX7ZGSJ4RiIuE/HpJwdjWeJSk2JlS34TihCDMtHg/I/AZCVwFiyraJsoM0/xWiSEZLSJe9q42iYXfSaBlNG6eYpBuSW4C0Xys0CSENkjkVQLv09HGnRKWADQO+shJvWkyiSlVejPA5ab0DHQ4n+ZErJDSuD8l7bX9TJsMOo+7bx821Q+3S1cJ3T2EilBoYOqXCCHd0NLpBhdKZmhMkBcu4ZmmOBOdLp2JQZbLJUVU4ESYJvZNMMpCMMVhP+BuHm7Ht+bpIwREjOqMLvZXZJUUTzSXcUnKa6MshBofVZJeSD0hyt/v0LINhlDrJKSKGFL9sWb+3y2UJlTjnICmCnBhrgKtA0m7hmqBN5H10gghKQx3lYK1U9G3hCOVQJfS6VJtiGuVkqNwfnJkgkhqdYjpSuKD6+l+47EateM+NkGTVIqo5xpKiEyYXqJXxFDUirYBk1SPKoiT5a0sm4toW/qWmJASIvS83u+f0nh03Y6hboqyZW6WJdL7xUHpA6YAZQpgc/XX/K1Ri4u2y3YECxgm1hnLbtLGe9cdaFucr46cApChxSHFJnyW4ABAF22P6t7bfCiAAAAAElFTkSuQmCC");
                }
                
                .footer_10_0_0__copyright {
                    background-image: url("data:image/gif;base64,R0lGODlhgAcwANUAAABfvwA/fwBgwABGjQBdvABKlQBAgABRpABTpgBBgwBDhgA+fgBJkwBUqQA/fgBAgQBNnABZswBDiABNmwBFigBHjgBXrwBevAA/gABfvgBZtABcuQBIkQBcuABatABUqABcugBRpQBatQBAggBChABOnQBIkABbtwBChgBduwBGjABSpgBWrABhwgBLmABDhwBXsABPnwBQoQBgwQA+fQBhwwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNyAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Mzk2RUU2OUJBNkI2MTFFODhBODA4QTU5ODZFMzQxNDIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Mzk2RUU2OUNBNkI2MTFFODhBODA4QTU5ODZFMzQxNDIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDozOTZFRTY5OUE2QjYxMUU4OEE4MDhBNTk4NkUzNDE0MiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozOTZFRTY5QUE2QjYxMUU4OEE4MDhBNTk4NkUzNDE0MiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgH//v38+/r5+Pf29fTz8vHw7+7t7Ovq6ejn5uXk4+Lh4N/e3dzb2tnY19bV1NPS0dDPzs3My8rJyMfGxcTDwsHAv769vLu6ubi3trW0s7KxsK+urayrqqmop6alpKOioaCfnp2cm5qZmJeWlZSTkpGQj46NjIuKiYiHhoWEg4KBgH9+fXx7enl4d3Z1dHNycXBvbm1sa2ppaGdmZWRjYmFgX15dXFtaWVhXVlVUU1JRUE9OTUxLSklIR0ZFRENCQUA/Pj08Ozo5ODc2NTQzMjEwLy4tLCsqKSgnJiUkIyIhIB8eHRwbGhkYFxYVFBMSERAPDg0MCwoJCAcGBQQDAgEAACH5BAAAAAAALAAAAACABzAAAAb/QJpwSCwaj8ikcslsOp/QqHRKrVqv2Kx2y+16v+CweEwum4mLSiiSEsze8Lh8Tq/b7/i8fs/v+/+AgYKDhIWGh4iJiouMjY6PkJGSk5SVlpeYmZqbnJZnn6ChoqOkpaanqKmqq6ysDi4gNbKztLW2t7i5uru8vb6/wMHCw8TFxsfIycrLzM3Oz9DR0tPU1dbX2Nna29zd3t/ereLj5OXm5+jp6uvsXC8e4PHy8/T19vf4+fr7/P3+/wADChyorJ3BgwgTKlzIsKFDMgMyEJxIsaLFixgzatzIsaPHjyDpPRxJsqTJkyhTqqSiAkDIlzBjypxJs6bNmzhz6iy2sqfP/59Agwod+iUBgZ1IkypdyrSp06dQoxIkSrWq1atYsxpkIbWr169gw4odS7ZsQK1o06pdy7ZtFAZm48qdS7eu3bt4b7rdy7ev378mHxzNS7iw4cOIEyterAuw48eQI0setYKx5cuYM2vezBnj5M+gQ4sefWRAi86oU6tezbq168akY8ueTTurgQ2vc+vezbu3b6i1gwsfTtwhgt/Ikytfzrx5vuLQo0ufjoqD8+vYs2vfzj0X9e/gw4u/kuBC9/Po06tfj3m8+/fw31tgT7++/fv4ncbfz79/bQj5BSjggAQWOJV/CCao4F8UzGDggxBGKOGE0Cxo4YUYWmVABxR26P/hhyB6mOGIJJZo0gchpqjiiiyiZ+KLMMaoTgEt1mjjjTi6JuOOPPZYCgou5SjkkEQWeZePSCapZBcBaGDkk1BGKSVTS1Zp5ZVNHDDlllx26eVGWIYp5pVwfWnmmWimKdKYbLYpowJBqinnnHTWWZCbeOZ5YQAi2Onnn4AGSouehBbK33GCJqrool0a6uij39HI6KSUVnojpJhmGpwEcVrq6aegPqjpqKSChsEJoaaq6qr0lerqq381wOqstNbaHKy45ppWCbb26uuvrekq7LBDTQDsscgmuxixzDZ7kgNaKivttNTG5ey12CqkQATVduvtt09lK+645wQQgwDgpquV7ro0kevuu6g8AMFg7NZr770XwavvvmUEYEIDneIr8MAEP8fvwQhTscAIJAxQgAwwoFvwxBRXbPHFGGes8cYcd+zxxyCHLPLIJJds8skop6zyyiy37PLLMMcs88w012zzzTjnrPPOPPfs888xdyL00EQXbfTRSCet9NJMN+3001BHLfXUVFdt9dVYZ6311lx37bUmQQAAOw==");
                }
                
                .footer_10_0_0 {
                    padding: 30px 0 0;
                    background: #003e7d;
                    color: #fff;
                    font-size: 13px;
                }
                @media (max-width: 414px) {
                    .footer_10_0_0 {
                    padding: 15px 0 0;
                    }
                }
                .footer_10_0_0 a {
                    color: #fff;
                }
                .footer_10_0_0 .container {
                    width: 1201px;
                }
                .footer_10_0_0 .footer_10_0_0__container {
                    position: relative;
                }
                .footer_10_0_0Box {
                    display: flex;
                }
                @media (max-width: 414px) {
                    .footer_10_0_0Box {
                    display: block;
                    }
                }
                .footer_10_0_0__info {
                    margin-top: 50px;
                }
                @media (max-width: 1024px) {
                    .footer_10_0_0__info {
                    margin-top: 5px;
                    }
                }
                @media (max-width: 414px) {
                    .footer_10_0_0__info {
                    margin-bottom: 15px;
                    }
                }
                .footer_10_0_0__info a {
                    display: block;
                    padding-top: 4px;
                }
                @media (max-width: 414px) {
                    .footer_10_0_0__info a {
                    display: block;
                    padding-top: 4px;
                    }
                    .footer_10_0_0__info a:nth-child(1) {
                    border-right: none;
                    padding-right: 0;
                    margin-right: 0;
                    }
                }
                .footer_10_0_0__info span {
                    color: #f69679;
                    font-size: 12px;
                    text-transform: uppercase;
                }
                .footer_10_0_0__social {
                    display: flex;
                    position: absolute;
                    top: 116px;
                    right: 0;
                }
                @media (max-width: 1024px) {
                    .footer_10_0_0__social {
                    right: 20px;
                    }
                }
                @media (max-width: 414px) {
                    .footer_10_0_0__social {
                    left: auto;
                    right: 15px;
                    top: 0;
                    }
                }
                .footer_10_0_0__social a {
                    display: block;
                    height: 24px;
                    margin: 0 5px;
                }
                .footer_10_0_0__social-facebook {
                    background-position: 0 -24px;
                    width: 24px;
                }
                .footer_10_0_0__social-youtube {
                    background-position: -31px -24px;
                    width: 34px;
                }
                .footer_10_0_0__copyright {
                    text-align: right;
                    background-position: center 0;
                    background-repeat: no-repeat;
                    line-height: 48px;
                }
                @media (max-width: 1280px) {
                    .footer_10_0_0__copyright {
                    background-position: -370px 0;
                    }
                }
                @media (max-width: 1024px) {
                    .footer_10_0_0__copyright {
                    background: #0061c3;
                    line-height: 40px;
                    text-align: center;
                    }
                }
                @media (max-width: 812px) {
                    .footer_10_0_0__copyright {
                    line-height: 20px;
                    padding: 10px 0;
                    font-size: 11px;
                    }
                }
                @media (max-width: 414px) {
                    .footer_10_0_0__copyright {
                    text-align: left;
                    padding: 5px 3px;
                    line-height: 17px;
                    }
                }
                .footer_10_0_0Item-brand {
                    width: 35%;
                }
                @media (max-width: 1024px) {
                    .footer_10_0_0Item-brand {
                    padding-left: 20px;
                    }
                }
                @media (max-width: 1024px) {
                    .footer_10_0_0Item-brand {
                    padding-left: 0px;
                    }
                }
                @media (max-width: 414px) {
                    .footer_10_0_0Item-brand {
                    width: 100%;
                    }
                }
                @media (max-width: 812px) {
                    .footer_10_0_0Item-brand img {
                    width: 160px;
                    }
                }
                @media (max-width: 414px) {
                    .footer_10_0_0Item-brand img {
                    margin-bottom: 10px;
                    width: 140px;
                    }
                }
                .footer_10_0_0Item-city {
                    width: 26%;
                    padding-right: 65px;
                }
                @media (max-width: 1280px) {
                    .footer_10_0_0Item-city {
                    width: 28%;
                    }
                }
                @media (max-width: 812px) {
                    .footer_10_0_0Item-city {
                    width: 31%;
                    padding-right: 22px;
                    }
                }
                @media (max-width: 414px) {
                    .footer_10_0_0Item-city {
                    width: 100%;
                    padding-right: 0;
                    }
                }
                .footer_10_0_0Item-city__name {
                    border-bottom: 1px solid #0072e6;
                    padding: 0 0 10px;
                    text-transform: uppercase;
                    font-weight: 600;
                    margin-bottom: 15px;
                    font-size: 15px;
                }
                @media (max-width: 414px) {
                    .footer_10_0_0Item-city__name {
                    font-size: 12px;
                    margin-bottom: 10px;
                    padding-bottom: 5px;
                    border-bottom: 1px dotted #0072e6;
                    }
                }
                @media (max-width: 414px) {
                    .footer_10_0_0Item-city__contact {
                    margin-bottom: 10px;
                    }
                }
                .footer_10_0_0Item-city__contact a {
                    display: block;
                    position: relative;
                    padding-left: 20px;
                    margin: 15px 0;
                }
                @media (max-width: 414px) {
                    .footer_10_0_0Item-city__contact a {
                    margin: 5px 0;
                    padding-left: 24px;
                    font-size: 11px;
                    }
                }
                .footer_10_0_0Item-city__contact a::before {
                    content: "";
                    display: block;
                    width: 18px;
                    height: 18px;
                    position: absolute;
                    left: -4px;
                    top: 0;
                }
                @media (max-width: 414px) {
                    .footer_10_0_0Item-city__contact a::before {
                    left: 0;
                    top: -2px;
                    }
                }
                .footer_10_0_0Item-city__contact-add::before {
                    background-position: 0 0;
                }
                .footer_10_0_0Item-city__contact-hotline::before {
                    background-position: -19px -2px;
                }
                
                @media (max-width: 1024px) {
                    .footer_10_0_0 .container {
                    width: 100%;
                    }
                }
                
                /*# sourceMappingURL=footer_10_0_0.css.map */
              
              
              
            </style>
        ';	
    }
?>
<footer class="footer_10_0_0">
    <div class="footer_10_0_0__container container">
        <div class="footer_10_0_0Box">
            <div class="foodItem footer_10_0_0Item-brand">
                <div class="foodItem-brand__logo">
                    <a href="#"><img src="images/logo.png"></a>
                </div>
                <div class="footer_10_0_0__info">
                    <a href="http://benhvienthammykangnam.vn/"><span>Website :</span> www.benhvienthammykangnam.vn</a>
                    <a href="tel:19006466"><span>Bác sĩ tư vấn (24/7): </span>1900.6466</a>
                </div>					
            </div>
            <div class="foodItem footer_10_0_0Item-city">
                    <div class="footer_10_0_0Item-city__name">Hà Nội</div>
                    <div class="footer_10_0_0Item-city__contact">
                        <a class="footer_10_0_0Item-city__contact-add" rel="nofollow" target="_blank" href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+Th%E1%BA%A9m+M%E1%BB%B9+Kangnam+H%C3%A0n+Qu%E1%BB%91c/@21.0004462,105.8284237,17z/data=!4m8!1m2!2m1!1zQuG7h25oIFZp4buHbiBUaOG6qW0gTeG7uSBLYW5nbmFtIA!3m4!1s0x3135ab920d07ad6b:0xaeafc086533191b!8m2!3d21.0004112!4d105.8306137">
                                190 Trường Chinh, Q. Đống Đa</a>
                        <a class="footer_10_0_0Item-city__contact-hotline" rel="nofollow" target="_blank" href="tel:024.73.00.64.66">024.73.00.64.66</a>
                        <a class="footer_10_0_0Item-city__contact-hotline" rel="nofollow" target="_blank" href="tel:0968.999.777">0968.999.777</a>
                    </div>
            </div>
            <div class="foodItem footer_10_0_0Item-city">
                    <div class="footer_10_0_0Item-city__name">tp hcm</div>
                    <div class="footer_10_0_0Item-city__contact">
                        <a class="footer_10_0_0Item-city__contact-add" rel="nofollow" target="_blank" href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+Th%E1%BA%A9m+M%E1%BB%B9+Kangnam+H%C3%A0n+Qu%E1%BB%91c/@10.7817488,106.6797661,17z/data=!3m1!4b1!4m5!3m4!1s0x31752edf6f710189:0xb553f42d991d07dd!8m2!3d10.7817488!4d106.6819548?hl=vi">84A Bà Huyện Thanh Quan, P.9, Q.3</a>
                        <a class="footer_10_0_0Item-city__contact-hotline" rel="nofollow" target="_blank" href="tel:024.73.00.64.66">024.73.00.64.66</a>
                        <a class="footer_10_0_0Item-city__contact-hotline" rel="nofollow" target="_blank" href="tel:0948.44.99.88">0948.44.99.88</a>
                    </div>
            </div>
            
        </div>
        <div class="footer_10_0_0__social">
            <a href="#" class="footer_10_0_0__social-facebook"></a>
            <a href="#" class="footer_10_0_0__social-youtube"></a>
        </div>
        
    </div>
    <div class="footer_10_0_0__copyright">
        <div class="container">
                Giấy phép hoạt động số 181/BYT-GPHĐ - Chứng chỉ hành nghề số 003474/HNO-CCHN   |   Hiệu quả phụ thuộc vào cơ địa mỗi người (*)
        </div>
    </div>
</footer>





