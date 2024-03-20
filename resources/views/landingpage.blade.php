<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Galeri Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Offcanvas navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                
                <img src="https://en.dagodreampark.co.id/images/Gambar-Pemandangan-Gunung-dan-Bunga-Sakura.jpg"
                    class="d-block w-100" alt="...">
                    
                <div class="carousel-caption d-none d-md-block">
                    <a href="/register" type="button" class="btn btn-primary">Masuk</a>
                    <br>
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/7/29/56e260fd-93bd-4055-baeb-ed502f6e1272.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a href="/register" type="button" class="btn btn-primary">Masuk</a>
                    <br>
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgVFRYYFRgYGBEYGBgYGhgYGBgYGBgaGRgYGBocIS4lHB4rHxgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QGhISHzEhJCQ0NDQ0NDQ0NDE0NDQxNDQ0NDQ0NDQxNDQ0NDQ0NDQ0NDQxNDE0NDQ0NDQxNDQ0NDExNP/AABEIAJ8BPgMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAADBAECBQYAB//EAEYQAAIBAgIECgULAwQABwAAAAECAAMRBBIhMUFRBRNSYXGBkaHB0QYUkrHSIjJCU2JygpOi4fBDwuIVY4OyByMzRJTx8//EABoBAAMBAQEBAAAAAAAAAAAAAAABAgMEBQb/xAApEQACAgEEAgIABgMAAAAAAAAAAQIREgMhMUETUQSRFEJxgaHxIjJh/9oADAMBAAIRAxEAPwDjcgkqkZCS4pyqMFIVIO6VV4+tKWOGB1wtjqLFUaHRRIGEYatI74QYc7oKdFPSbRKpCKnNaTTGzT1iFC7GFueNtMUVKJHFjdLogGyFp04dacmkaKbT3ANTJ5oMU76DH1pzxoRrYUmn2ZtbDfJIGmIGnosbg7Ju1BbVBNRBUbbHTvtBy3BR2M7C0SCLgzQNE20a5UOQb7vdCHEjXqG2VGSomcZWjxw1xukpSYC1r8/NL08Wraj26IZX6pTcSFGW65KKnNJyRh6qgb+caozxMcZJ8MzlBrlGeKUlacfNLVoluKAlOQoxM7i57ipoKgYXXVvnjRiUmXKKTM00pAoTSNGQKUeRCjuZhoyppTTNGVNGS5mkYmZxUhqZmkaMo1KQ5G0YszTSlTSjVRhqBW/TAst9bAb7eciUmaKKFXSJ4gaD4a444UXsQd9zFuPB0XUDp0xWOjDxLm/ze2LkNt/nZNbHhBqXrMya1UagfKVF2RJJPkGxtzwT1L80hng2MZm2SzmDLyrSsKFZ3KpCqkuiQypM8hYglSXWnDokMlOGQYi60oRacYWlDLShkhpMU4gHWJJwl9H87Y+lKFWnE5I0V9mYuFK84hEQ2NrTUWlLeqg83RIyaNEovkyeMINrXh6dRT5n3R/1BTrEoeD7HRpEM2NQixRqatexFxzQRQlraNWsbY+aZXTY9EolIk82zeOaGQ1HpGJi0022xdiwFiJ0GL4PZ7GJtwQ5FhpIlKcSXCRjIoBve/VHMNiTcZhr90v/AKY4Oqw3mXo4NlYEnqM0ck0RGLT3NPDhbZXAYE2Ww02O8R5MDq0nRumcaPykItoIvp2dc2CQ62V9OsaRrG/TqvIUhyj6FsSSlgBmJ37ANssDoFx87QeaMYSlUs2e2bNoJsdY0i142EU6CLdIky1JDjpx7M9KIUZV87QgpQ9Tg6+2x13G2N+rwWqwlpR6ZlugGkyFp3FxpE0fVNFry6YSwsNEfnEtD0ZfExfEnLqW/dNcYEgH5RNxt2dExq+Aa5Gcrm1gkEmR5kzZaDQhWxZ1GydOmZlbFA6Gdjr6JsVPRtiLgknq8RERwOyk5kZgLaiP2lKcX2D0pLozPWF1Bc3ToEXxNU5c2rm3eMfx2SxUIEI0aWF5mpVpC+dSTsII77y1xdGb2dNmbVe+wk6Yu7ta2qa2OxFC3/lq435gPOZdRxsEuLvoyls+bFnudZv0wLLDtBMplEAWg2EMUlTTgAuRItDFJQrAR9ISnDpTlkXmjCJPP8h2+EGlKGSlDIkMqReQfhApShkpQqJzRhEkvUKWkhZaXNCKnNHVpiGSmJL1S1pL0ILT5oVacfWiIVKHXF5h+GIgEhFSPDDDdLDDbovMLxIz3o32Hpgv9POsEX6JrrR3y4pCHmZS00Y7YY6iLbObpG6WOFcabgjo8pr8XF8RQDCzA9V/CLzMrBdHM8K0ib2NjznT1CYYwbs2u87CvwOpN8z9GvRzSbonzsxsNqgg9oE6oa6SpbnNPSbdvY5epwTUGu4t0nvlcJg3B1lW+jr0nmInTPwygN1Rib6QTZTvNtOmKYrhUufmJa9xcG/aDNVPUfKMZQ009mRg3qPZHFuTsFxo1jTrmzRp1Co+QLi3zidczqfCD6LMr2F7FbWO7ntH8Dwi7EApfQxbUNN79WjRMdRvnY1ilwaK0rgX0G2nmlGdF+cQoG0kaY5SZW2d0I2FVtag9QnOtVluMTPpVabH5LqTzGFdB/DaGGApjSEXsklF1HL0SXqFRpI57hXhNqRtkU7jmv2i05vE8OVfoBU+6ov2m8+gYjD02FmAI7Jm1sDhEBzBB0m56hea6erFcq2KWT4dI4GrwtiDcZ2085/gmdUd21ux/ETOz4QbCDQiEneoIH6pzGIpgk2Fp26clJcUc87XdmQ+GO33wLUBNF6MA9AzYwM5qYgik0GomCagYw3EWUQTLHmoQbUDANxFlg2WPnDmQ1CAUZpSVyTSNLmlDSisVH0xKUMic0hXhVqTx2p+j6HHR9kqp3QiX3Ty1YRag54sZ+icdL2eD/ZhkqDdaVVxCqw3yWn6DGHTCKywqkbzAgiXWRTKqIdWEKtSLASwWGInFDQqQgqRMLLgROLIcUOCoN09cbhFRJixZGKHFI3S9xEQZIYwxkS4DhUGLYrCqwAbSNw0eMrnMjOZUYTW6ZOIA8HUfqz3nxl0wFPYg6x5zL4a9JKGGNq7hSQpCLdnNyb/ACRpto188eweMp1lFSk61FOplNx0HceY6RNGtSrbYKMbpUF4pF1Lqvu2wfrOW5VNJ3keUKRzkdcgpzmVGvzbjlBvZAl4RfkrGafCb7cvVeANIT3EDfNH4/0M1py73GK3CotoBv3TLr4pm5uiMmhzyDhRv7o4+KO4np6nC2MqozHae+K1EJm4cKN57JRsIu281WtFcL+CPBJ8s516BMXfCndN+visMmh3QHcXF+wG8WfhvCDRxidQY94Ef4iXUW/2F+Hgv9pJfuYT4XmgHws6I8MYXVxid9u21o9hqtNxemyON6ENbptqifyZpW4s0j8XTfEkzjBg76gewy44Hc/QbsnbESrAzJ/Lm+Im8fhQXLOKPAj8gyh4Ge9shnXujnUVHUTF2wrn6dugRx15vmkEvi6a4TZy/wDoNTaAOllHjKtwMAbNURTuux9wnRtwbfW5P85zKHgpNpJ7PKX5pdv6Rm/jLpfbOafg6kNdW/3Ua/6rQGJwlMAZCzX13W1p1Z4LTn7vKT6ko1XEpav/AFkPQ6pIUCVt49n94VUrfZ9n950K0ebul1o/y02cl6PP/wAvbMFUq/Z9n94VUq83s/5TdWl/LQi0BzdklyXoay9sxFFT7PYfOFQVObsPnNpaI5uyEWiN3dJcl6LWXtmMq1Obs/eGRX/gmqKAl1pCQ5L0Ws/bM1Q+73wih+b+dc0RTEutMc8hyXo0Tl7ZnhX3S4D7porTEsKQ55DkvRSz9mcA26W+VumhxYkcUJLaLTl7EdO6eIO6PmmN05v0l9KKWDZEqI16mbIxZVQ5bXu1zlHyhrEI3J0kDm0rbNMsd0QwHCwqmqFFuJqPTbfdQCTo6ZxOM/8AERHDIyplJtqq2NjsdWF9Wsa5i8AcP08O9Rlel8uozrmNRsoP0QC1j0nTOiOk63RlLWfTH+Gq3BiYkh8O1TMhZ2ZsSpV8x1hzmNwd1tA3zS9FuGOD6d3pL6u7lrpbE1Bl0WvrU6tdrjTMzhHDJjKnHuVdmREGS6jKpupHPsvuMdwPBqUx8hQPE9k2xVbmWbvY6pvS3DC+Z8oFtJR9OgG/zdG0dUWoenWBYNeqFYF7IVclgt7EFQQAbbd+mY1SidmnsmdiOCDUZRx7UFNwzCmjix3roPTY9UnxQ5H5pezsKfplg2DWd2yojELQrm2YMQrWQ5T8nbo7DOg4MHHUadYAqKiI4U2JAdQwBINjrnzfDei2LTG08NQxmam9JajVQqrlUZl+SgJzMALDTb5XTPsOCwgp00pjSEREF9yqFHcJnOEei1qy9mZVwLEfIYA7CVzDszD3zMxPAmJbVisn3KSjvzXnWlJUpJScev4E5t9s+e1/Q2q2k4pz0hvjidX0Gc68QW6UJ/vn0pli7pNI6zRD07/s+Zv6Ckf1R+X/AJQJ9C2+tHsf5T6RVSLOk6I6zZjLRR89b0Nb6wewfOQnok6m61sp3hWB7Q071klDTl+Qjx09jjaPA2JT5uJboOYjsJMI+DxR14k9Sge4Tq2pQT0ori+UvoqpriT+zl1oYtf/AHAP3kU+8Sj08Xe/rAHMEW3ZlnTNSgWpRpQfS+hOWotsn9nNGli739Y/SLdmWFD4v61D+BfKbppSppCVjF9L6FnNfmf2c+4xZ/r9iqP7Yu2ExJ1129ph7p0xpCRxQlJRXCX0Q5TfLf2bgpywSWAlws8+zqoqqS2QSwlg0THR5Elwk8Gl1aS7GjwWXAkXlxIZpEkLJCyVMnNJZaokCTaeEm8hlEWkWkkyM0TA9aYXpZ6P0cXQZaoOZFdkddDowGsHaDYXBm6TMHh/h+nRVk+e5DLkU/NuNbnZr1a5WmpOSxJlVbnAcHcAYZMJgKtVS4r1g1dmzEBDSqnIAvzVBVdWkmexnB2EL3oUSiDls7ZjsOVicolaVNilOmSzJTUIisSQoG4A2vzxlKGoZV7DPSUWt2zllJPZBsNRUatA6Tp7o4pW9r6ucxdUAGoD2penTG23f5QdiVBza+vZvtB1Ftq1felHQEjR3DykvSBHzT2HyiVjdBeDcS1CstVVDEBl03PyW1jXzCfReDOE0rLdDpFsynQV8xzjRPmBpbLHvk4dnpsGQurDaCw/nRtg4XuK6PruaVJnN8DekyPZKtkfVmNgjHt+SebVOiJmE7WzLVMo8C8K5gHMz7NVwBqRZoaoYu5m8SJA2EoZZjKEzQzIIgmEuzQTNGhlGECwhGaDYy0ZyKkShEktKFpSJZ4iRaQTPXlEmyHlg0V4ySKk48TbIaDSQ0V4ySHioMhrNLq8Tzy4qSXEakOK8vxkTDyQ8lxLUhwVJYPE888KkhxLUh8PJDxEVJIqSXEpSHS8DXxKopZ2CqNZJsJkcK8PU6IsxDPsQEX/ABckTieEeE3rtd3IH0VGhV6BtPOZpp6EpbvgmWskdBwz6Tu10w4suovmUMfuj6PTr6Jza021lSb7cynwgkX/AHDDqTy/dO6OnGCpI5pTcnuwioeQe1fKMUqR5J7vhiyX15+jQIdM9vnA/hjaEhjizyT2f4y4pnkd37RVVe+vuPnCBKm6/VaKh2GekeR3Dylsh5J6l/aLOKvP3eJlUFW2m56l84UFh6iEaQh7B5QWV9eT9P7SrJUOw9iwJpvt/wCsdBY0HcalHZ+03OCfSF0srjOmga/lIObRpHNOYKNuv1HwlDSbeR+FoSipKmhJ12fVKOLR1DowYe7mI2GVd580wFavTfMjsukXWwysBsYH/wC9Ogzs8BwqtQWIyPtU7edd85nouLs2WomPu8XZ553gXeVFEykWZoMtKs8Gzy6JsIzwLvKs8GzxpA5Es8EzyrPAs8tIzcgxeULQTPKl5RNhi0jNA557PGFmiKssHiIqSwqTnoeQ6KknjIlxkjjIsQyHuMlhUiHGSwqRYjyHxVlxVmdx0kVpLiWpGiKsnjZnCrAY7hFKS5mvzKASx6hs54sL2KzNdq4AJJAA0kk2AG8mc1w16StYpQuN9SwPsC+jpP7zF4T4bNTQVJW+hRnXovcC5matVDrQjpYjvAm0NFLdkym3wSKDuSblrkkkjSTtvpvGk4OfYp9k+UCuIp7dH4/NYRcVS5dvxr5TfYjcOuAfc3Y3lJXAVDy7fj8os2KpXtnPavvjKYmny++mfeYbBuMeo1Nz/rkHB1PtfrlRik5f/TwM960n1h7PJpI9yqYWodJzHt/aFFF/te7xlqeJHLPa3xy3rK8s9rfHCkG4M0qnJb+dcpSove1mvzkecOcQOUfafwaD40A3zHtfwPjAAvFVNVh3fFKPhqh2Du85JxA5TfrP98qaw5Tdj/HDYe4vxbg6Sg6wPcZJwz83VnPjPE31ZurR73lDilBszMD0D3kw2Dck4Pf7nPvEmlSC7bWOjRbruRIfFpy27U84D1teW3tJHSFuddgOGGtardtz2On71hbrE1OMvpGkHUZ89XGqNTm27MnvmhguG8mi+ZdxYaOiwkuK6C2dezyjPEsLjkqLmQ3Go7wdxhmeKibLs8E7yrPBO8aQnIlngmaVZ4NnlJEtly09mgS0rmjEGLz2eBLyM8YWGFSTxsR4ye42ZULIf42e46IcZJ46FBkPcZPCrEONnhWhQZGkKk9x3PMypilQXZgo3kgad2mJvwkPoult2ZT3hhBQspMfxvDAUWQozXsbuAB0a7nqmLUrZmuwJJ1kVHPuWwji48nRdO1fjhuMB+inWQZrGCRViK0xua/338YQINz+1f3mNlF2pTP86JGRfqqfYPhjxCxUqNz9qeJnrKNZqD8v4oycg/or1fssqgTkdGlhE0NMqtJdd6nsofGQ1Jduc9KJ4RjInIb2z8UhUXkP+Z/nFQWLtQTcfy7+EEcMnJv/AMRjtk5L+3/nPIi68r9IYfHFQ7FPUUP0VH/A5njwcm5fyHj3yd1T2v8AKWsu6oOv94UFmceDk3L+Q/nIPBybl/IfzmlkX/c7pVqa2+n15bQxCxIYBOSP/jtJ9STkj8kjwjlO3KY25JXzl7D/AHD+IfFFiOxA4FR/+Z+GVODT7Xs28JoELyantgf3wbfdcdNQW/7x4oLEfUlOov2Dyk+orvfsXyjBcA3JNt2fxzy5I2Kxv9tvOOhWKepJvfsSR6so1Z+xNPfGGtyP1HygnJ2Lb8Z+GVQrCYdyhzJnB1fRsekXmzh8ZmGkZW3X905lqjg3CMf+QnuKw9LFVDqQKftA+BiaQPc6MvBO8y8PjHBtUK22FQRbpuTeNNUvpBk1RD2DM8GXgs5lS8ZNhs8rmgS8jNGKw2eezwOaezQCxbjJ7jYnnk8ZJozsb4ye4yJmpIzwoVjhqwVbF5RosTuJsOs2irOSCBfTo1274nxR5T+15x0awj7GHxjNoOQ82bR3rK2J05FI5imnugQjbGfn0qbdohTTYDQ7difDKNT2TfRB9jznsg+o7k+KSoblk/hTyhAG2N+kecQygpr9QfZTwaXFJPq2HQvkZYq2q67NaX/ul2pMDrT8tvjgAM0l5NQfhfwMIqINtYddfwl0DAfOTXyH1+2ZdqzjYh9oeJiAGMnLrDqxB94lhUTY9brFTxWW497XAU/iceEr605+gnU7D+yKx0e49frX68w96wq4hR/W/UvlFziWOjL2VWH9kaWs5+gPzD8ELCiVxS/XD208RBtjh9b+pD4Qoq1OT2P5rINduSfaEMgxKJjSf6n6kHhPPiB9b30z4S6YhuQfaWSazck9qxZBQuuKN/8A1AB9+n7ssZ9YXXx/6k8FkBm12b2lt2WhVqPyf1DyhY6BGuu2tf8AGvgJ5nQ/1W9v9pdqzj6H6x8MGMRU5A/M/wAIZCoC4+2x/Gw90qUvrZ+p6xhKjudOQD/lbwSBdm5I/Mf4Y7Cj3q43ufxVpBww+321D7zJau+jQnax8JRq7/Y7G847CiPUxyT3+JkeojkduXxMstVj9JB+Bj/fKvUqX+ensEf3w2FuE9Tp/SRdO8J4mO0VyrlVbAaLC1h2GZBrMPpDqQeJl1xLnSKjD8KeUdoGmzZzGUzzL41/rG7E+GNU699euIzlFoazT2eLl5GaMgZzSM0Bmns0AP/Z"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a href="/register" type="button" class="btn btn-primary">Masuk</a>
                    <br>
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>

</html>
