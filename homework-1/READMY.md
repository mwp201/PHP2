https://github.com/mwp201/PHP2/blob/master/homework-1/php2.sql#L41
Не используете SERIAL - не смотрели урок? Минус полбалла еще.

При создании таблицы я использую SERIAL, но это поле автоматически меняется на bigint(20).

SERIAL - это псевдоним для выражения BIGINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE.
https://dev.mysql.com/doc/refman/5.7/en/numeric-type-overview.html