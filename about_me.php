<?php 
    include 'header.html';
?>
<div class="wrap">
            <div class="text center">
                <h1>Обо мне</h1>
                <h2>Меня зовут Гудзовский Марк, я студент 2 курса Московского Политеха. Из преподавателей 
                    самым лучшим я считаю нашего преподавателя по веб технологиям,Владислава Алексеевича</h2>

                <h2>Мои достижения:</h2>
                <il>
                    <?php
                        $array = array('Ждать до конца', 'Уговривать поставить 3', 'Пережил первый курс');
                        foreach ($array as $i) {
                            echo '<li>'.$i.'</li>';
                        }
                    ?>
                </il>
            </div>
            <div class = "center">
                <?php 
                    if(date('s') % 2 === 0)
                        $name='1'; 
                    else
                        $name='2';
                    echo '<img id="img_nature" class = "height500" src="img_'.$name.'.JPG" alt="Меняющаяся фотография">';    
                ?>
            </div>
        </div>
        
    </main>
        <footer>

            <span class="left">Все права защищены &copy; 2022
            <?php echo date('d.m.y в H:i:s'); ?>
            </span>
            <span class="right">
                <span class="contact">+7 (900) 235-75-07</span>
                <span class="contact">mark_gudzovskiy@mail.ru</span>
            </span>
        
        </footer>
    </div>
</body>
</html>