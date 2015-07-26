<!doctype html>

<html>
<head>
    <?php @include 'templates/head.php' ?>
</head>
<body>
    <div class="wrapper">
        <header>
            <h3>Amazing a Tees</h3>
        </header>

        <div id="rightcolumn">
            <img alt="T-Shirt" class="tShirt" id="tShirt" name="tShirt" src="img/tShirt.png"> <img alt="" class="pic" height="80" id="pic" name="pic" src="null" width="60">

            <table summary="Shirt text">
                <tr>
                    <td>
                        <p class="shirtText" id="shirtText">Harrys Shirt</p>
                    </td>
                </tr>
            </table>
        </div>

        <div id="leftcolumn">
            <form action="basket.php" method="get">

                <p>Select a shirt colour
                    <select id="colourList" name="shirtColour" onchange="printShirt()">
                        <option value="White">White</option>
                        <option value="DeepSkyBlue">Deep Sky Blue</option>
                        <option value="DarkSeaGreen">Dark Sea Green</option>
                        <option value="DarkRed">Dark Red</option>
                        <option value="LightYellow">Light Yellow</option>
                    </select>
                </p>

                <p>Select a shirt picture
                    <select id="pictureList" name="shirtPic" onchange="printShirt()">
                        <option value="null">Nothing</option>
                        <option value="img/apple.png">Apple</option>
                    </select>
                </p>

                <p>Text on shirt
                    <input id="shirtTextBox" maxlength="30" name="shirtText" onkeypress="printShirt()" onkeyup="printShirt()" type="text" value="Harrys Shirt">
                </p>

                <p>Font
                    <select id="fontList" name="shirtFont" onchange="printShirt()">
                        <option value="arial">Arial</option>
                        <option value="courier">Courier</option>
                        <option value="verdana">Verdana</option>
                    </select>

                    Font Colour
                        <select id="fontColourList" name="shirtFontColour" onchange="printShirt()">
                        <option value="black">Black</option>
                        <option value="white">White</option>
                        <option value="green">Green</option>
                        <option value="red">Red</option>
                        <option value="blue">Blue</option>
                    </select>
                </p>

                <p>Font Size
                    <select id="fontSizeList" name="shirtFontSize" onchange="printShirt()">
                        <option value="15">Size 15</option>
                        <option value="20">Size 20</option>
                        <option value="25">Size 25</option>
                    </select>
                </p>

                <table border="1" summary="Quantity">
                    <tr>
                        <th>Size</th>
                        <th>Quantity</th>
                    </tr>

                    <tr>
                        <td>Small</td>

                        <td>
                            <input id="smallQuan" maxlength="3" name="smallQuan" onblur="value=validateQuan(value);" type="text" value="1">
                        </td>
                    </tr>

                    <tr>
                        <td>Medium</td>

                        <td>
                            <input id="mediumQuan" maxlength="3" name="mediumQuan" onblur="value=validateQuan(value);" type="text" value="0">
                        </td>
                    </tr>

                    <tr>
                        <td>Large</td>
                        <td>
                            <input id="largeQuan" maxlength="3" name="largeQuan" onblur="value=validateQuan(value);" type="text" value="0">
                        </td>
                    </tr>

                    <tr>
                        <td>Very Large</td>
                        <td>
                            <input id="vlargeQuan" maxlength="3" name="vlargeQuan" onblur="value=validateQuan(value);" type="text" value="0">
                        </td>
                    </tr>
                </table>

                <table border="0" summary="Contact details">
                    <tr>
                        <th></th>
                        <th>Address</th>
                    </tr>

                    <tr>
                        <td>Name</td>
                        <td>
                            <input id="nameBox" name="nameBox" type="text" value="Test">
                        </td>
                    </tr>

                    <tr>
                        <td>Line 1</td>
                        <td>
                            <input id="l1Box" name="l1Box" type="text" value="Test">
                        </td>
                    </tr>

                    <tr>
                        <td>Line 2</td>
                        <td>
                            <input id="l2Box" name="l2Box" type="text" value="test">
                        </td>
                    </tr>

                    <tr>
                        <td>County</td>

                        <td>
                            <input id="county" name="county" type="text" value="test">
                        </td>
                    </tr>

                    <tr>
                        <td>Post Code</td>
                        <td>
                            <input id="postCode" name="postCode" type="text" value="test">
                        </td>
                    </tr>
                </table>

                <p>
                    <input onclick="return validateOrder();" type="submit" value="Place order">
                </p>
            </form>
        </div>

        <?php @include 'templates/footer.php' ?>
    </div>
</body>
</html>
