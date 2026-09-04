# Introducción a PHP - Lab 1

Primera práctica de introducción al desarrollo web utilizando **PHP, HTML y CSS**. En este laboratorio se realizaron ejercicios básicos enfocados en la creación de formularios, recepción de datos mediante `POST`, operaciones matemáticas y conversión de unidades.

## Descripción

El laboratorio tiene como objetivo poner en práctica conceptos fundamentales de PHP y su integración con HTML y CSS. Los ejercicios permiten observar cómo los datos introducidos por el usuario pueden ser enviados a un archivo PHP, procesados y posteriormente mostrados en una página web.

Entre los temas trabajados se encuentran el uso de variables, formularios, estructuras condicionales, operaciones aritméticas y la aplicación de estilos mediante hojas de CSS.

## Archivos del proyecto

| Archivo                    | Descripción                                                                                      |
| -------------------------- | ------------------------------------------------------------------------------------------------ |
| `laboratorio1(circun).php` | Formulario para ingresar el radio de una circunferencia.                                         |
| `circun(lab1).php`         | Procesa el radio ingresado y calcula el área y el perímetro de la circunferencia.                |
| `circun(lab1).css`         | Hoja de estilos utilizada para mejorar la apariencia del ejercicio de la circunferencia.         |
| `laboratorio1(pulg).php`   | Formulario utilizado para ingresar una cantidad en pulgadas.                                     |
| `pulg(lab1).php`           | Recibe las pulgadas ingresadas y realiza la conversión a centímetros.                            |
| `pulg(lab1).css`           | Hoja de estilos utilizada para decorar el formulario y la página de resultados de la conversión. |

## Ejercicios realizados

### Circunferencia

En este ejercicio se solicita al usuario el radio de una circunferencia mediante un formulario.

El programa utiliza PHP para calcular:

* **Área:** π × radio²
* **Perímetro:** 2 × π × radio

Los resultados son enviados a una página independiente donde se muestran utilizando estilos CSS.

### Conversión de pulgadas

El segundo ejercicio permite introducir una cantidad expresada en pulgadas y convertirla a centímetros.

Para realizar la conversión se utiliza la relación:

```text
1 pulgada = 2.54 centímetros
```

PHP procesa el número recibido desde el formulario y muestra el resultado de la conversión.

## HTML, PHP y CSS

Durante la práctica se trabajó con diferentes tecnologías que cumplen funciones distintas:

**HTML** se utilizó para crear la estructura de las páginas y los formularios utilizados para introducir información.

**PHP** se encargó de recibir los datos enviados por los formularios y realizar los cálculos correspondientes en el servidor.

**CSS** permitió modificar la apariencia de las páginas, agregando elementos como colores, espacios, bordes redondeados, sombras y estilos para los botones y resultados.

## Funcionamiento general

El funcionamiento de los ejercicios sigue un proceso sencillo:

```text
Usuario
   ↓
Formulario HTML
   ↓
Envío mediante POST
   ↓
Archivo PHP
   ↓
Procesamiento / cálculo
   ↓
Página de resultados
   ↓
CSS
   ↓
Resultado presentado al usuario
```

Este proceso permite comprender de forma práctica cómo un formulario web puede comunicarse con un programa PHP para procesar información.

## Herramientas utilizadas

* **PHP** — Procesamiento de datos y operaciones.
* **HTML5** — Estructura de las páginas y formularios.
* **CSS3** — Diseño y presentación visual.
* **WampServer** — Servidor local utilizado para ejecutar los archivos PHP.
* **GitHub** — Plataforma utilizada para almacenar y organizar el proyecto.

## Requisitos

Para ejecutar los ejercicios es necesario contar con:

* WampServer, XAMPP u otro servidor local compatible con PHP.
* Un navegador web.
* Los archivos del proyecto dentro de la carpeta correspondiente del servidor local.

En WampServer, los archivos pueden colocarse dentro de:

```text
C:\wamp64\www\
```

Posteriormente, con el servidor iniciado, se puede acceder al proyecto desde el navegador mediante `localhost`.

## Objetivo de la práctica

Esta práctica busca familiarizarse con los conceptos básicos de PHP y comprender cómo puede trabajar junto con HTML y CSS para crear páginas web dinámicas.

Los ejercicios permiten practicar desde la entrada de datos mediante formularios hasta el procesamiento de esos datos y la presentación de resultados de una forma más organizada.

## Autor

**Samuel Orocú**

Práctica realizada como parte del laboratorio de introducción a PHP.
