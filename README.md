# EDRO:

# Это объект, состоящий из 4х вложенных  составляющих: 
# E - Событие
# D - Вид
# R - Реальность
# O - Вложенные инструменты

# Благословенный.RCe.Framework Precision 0_1 math:
# Как проводить математическиее операции с рядами, начинающимися с 0 и 1?
# В следующих рядах, количество елементов одинаково, но начинаются они с 1 или 0, а потому значение конечного операнда - разное. 
# Мы объявили эти ряды, в стиле Благословенный.RCe.Framework Precision 0_1 math. Ряд начинается с 0:
# int0_name - integer started from 0 (0,1,2,3,4,5)=5  
# Ряд начинается с 1.
# int1_name - integer started from 1 (1,2,3,4,5,6)=6

# Больше не надо мучиться. Теперь все математические операции одновременно с двумя рядами, однозначно понятны и видны наглядно. Во они:

# Приведение типов
int0_name+1 = int1_name; <br/>
int1_name-1 = int0_name; <br/>

# Сложение
((int0_name+1)+int1_name)     =int1_result; <br/>
(int0_name+(int1_name-1))     =int0_result; <br/>

# Сравнение
(int0_name+1)    >|<|==|!=    int1_name; <br/>

# Деление
(int0_name+1)/int1_name       =int1_result; <br/>

# И приведение типа к нужному
int1_result-1                 =int0_result; <br/>

# Деление2
int0_name/(int1_name-1)       =int0_result; <br/>

# И приведение типа к нужному2
int0_result+1                 =int1_result; <br/>

# Умножение
int0_name*(int1_name-1)       =int0_result; <br/>
int1_name*(int0_name+1)       =int1_result; <br/>

# Это гениально! Экономит миллионы лет, на любом языке программирования и просто в устном счёте.

# Благословенный.RCe.Framework Precision 0_1 math!

#   Автор: A.A.Chekmarev: assminog@gmail.com. 
