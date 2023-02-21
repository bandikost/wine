<p align="center">
  <img src="https://i.ibb.co/xJgbGtD/header.jpg" alt="" width="720">
 </p>

<p align="center">
  <img src="https://img.shields.io/badge/-PHP-plum" alt="PHP">
    <img src="https://img.shields.io/badge/-CSS-blueviolet" alt="CSS">
    <img src="https://img.shields.io/badge/-Html-orange" alt="Html">
</p>

## О проекте
  
-  Самый первый проект, в котором я использовал js и php.
В проектной работе было написано все на чистом js и php, в этой вёрстке я тестировал навык работы, в первую очередь, с модальныит окна и и бургер меню

- [x] Отправка формы на почту, при помощи <img src="https://img.shields.io/badge/-PHP-plum" alt="PHP">

- [ ] <p align="center"> 
  <img src="https://i.ibb.co/G5R4HHt/q-FTa-Ghyr-MVk.jpg" alt="" width="720">
 </p>
 
- [x] Работа с модальными окнами 
<p align="center"> 
  <img src="https://i.ibb.co/M5sCwYM/Pb-TDV-8-G70g.jpg" alt="" width="720">
 </p>
- [x] Бургер меню для мобильной версии.


- [x] Прелоадер для красивой подзагрузки страницы.


-  Также можно будет увидеть работу кроссбразуерной и адаптивной верстки
<div class="full-table-wrap"> <!-- контент -->
            <?php
            echo '<div class="main-table__content">
                    <table id="mytable" class="main-table__table-office">
                        <thead>
                            <tr>
                                <th>№ помещения</th>
                                <th>Назначение помещения</th>
                                <th>Количество комнат</th>
                                <th>Площадь, м&sup2;</th>
                                <th>Арендная ставка, руб./м&sup2; в месяц</th>
                                <th>Арендная плата в месяц, руб.</th>
                                <th>Примечание</th>
                                <th>Этаж</th>
                                <th>Бизнес центр</th>
                            </tr>
                        </thead>
					    <tbody>';

            $sql = "SELECT * FROM modx_allbc WHERE isChecked=1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td><a href="rent/office.php?id=' . $row['id'] . '&bc=' . $_GET['bc'] . '" target="_blank">' . $row['number'] . '</a></td>';
                    echo '<td>' . $row['type'] . '</td>';
                    echo '<td>' . $row['rooms'] . '</td>';
                    echo '<td>' . $row['area'] . '</td>';
                    echo '<td>' . $row['price'] . '</td>';
                    echo '<td>' . $row['summ'] . '</td>';
                    echo '<td>' . $row['comment'] . '</td>';
                    echo '<td>' . $row['floor'] . '</td>';
                    echo '<td>' . $row['bc'] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            echo '      </tbody>
			        </table> 
			      </div>';
            ?>

        </div>
