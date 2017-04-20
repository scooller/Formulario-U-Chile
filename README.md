# formulario
Se debe crear una tabla *'formulario'* con los campos:
```
CREATE TABLE IF NOT EXISTS `formulario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `rut` varchar(20) NOT NULL,
  `juegas` varchar(50) NOT NULL,
  `nacimiento` date NOT NULL,
  `porque` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
```

Ademas en [index.php](index.php) linea 76 se deben cambiar los parametros de coneccion a la Base de Datos

**mysqli("localhost", "my_user", "my_password", "ddbb")**