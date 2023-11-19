<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>IP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <img src="logo.png" alt="Logo de la página">
  </header>
  <main>
    <div class="indice-container">
      <h1>Contenido</h1>
      <ul>
        
        <li>Introduccion</li>
        <li>Acerca de IPv4</li>
        <li>Acerca de IPv6</li>
        <li>Partes de una Direccion IP</li>
        <li>Clases de Direcciones IP</li>
        <li>Direcciones IP Privadas</li>
        <li>Direcciones IP Publicas</li>
        <li><a href="calculadora.php">Calculadora de direcciones IP</a></li>
      </ul>

    </div>


    <div class="section-container">
      <section id="introduccion">
        <h2>Introduccion</h2>
        <p>Las direcciones IP son números que identifican a un dispositivo en una red. Están formados por cuatro conjuntos de números del 0 al 255 separados por un punto.</p>
        <p>Hay dos tipos de direcciones IP: las privadas y las públicas, que pueden ser fijas o dinámicas.</p>
        <p> Las direcciones IP públicas son visibles por todos los host conectados a Internet, mientras que las direcciones IP privadas son visibles únicamente por los host de su propia red o de otra red privada interconectada por medio de routers </p>
        <p> El protocolo IP describe el uso de direcciones IP para identificar de forma única los dispositivos conectados a Internet </p>
        <p>Todas las direcciones IP contienen cuatro números separados por un punto y conocidos como octetos (cuatro octetos).</p>
        <p> Estas se dividen en clases dependiendo del valor del primer octeto: Clase A (0.0.0.0 - 127.255.255.255), Clase B (128.0.0.0 - 191.255.255.255), Clase C (192.0.0.0 - 223.255.255.255), Clase D (224.0.0.0 - 239.255.255.255) y Clase E (240.0.0.0 - 247.255.255.255) </p>
        <p></p>
      </section>
      <hr class="dividir">
    </div>

    <div class="section-container">
      <section id="ipv4">
        <h2>Acerca de IPv4</h2>
        <p>IPv4, Internet Protocol version 4, es la cuarta versión del protocolo que se utiliza para identificar y comunicar dispositivos en una red de computadoras. Fue la primera versión en ser ampliamente adoptada y es la base de la mayoría de la comunicación en línea.</p>

        <h3>Formato de una Dirección IPv4</h3>
        <p>Una dirección IPv4 tiene el formato siguiente: xxx.xxx.xxx.xxx, donde cada conjunto de tres dígitos corresponde a un octeto. Cada octeto puede tener un valor entre 0 y 255. Por ejemplo, 192.168.1.100 es una dirección IPv4 válida.</p>

        <h3>Ejemplo de Dirección IPv4</h3>
        <p>Una dirección IPv4 típica puede ser 203.0.113.17. Cada número en la dirección representa un octeto y puede tener un valor entre 0 y 255. Esta dirección es utilizada para propósitos de documentación y ejemplos, y no corresponde a una dirección real en Internet.</p>
      </section>
      <hr class="dividir">
    </div>



    <div class="section-container">
      <section id="ipv6">
        <h2>Acerca de IPv6</h2>
        <p>IPv6, Internet Protocol version 6, es la versión más reciente del protocolo de Internet. Fue diseñado para abordar la limitación de direcciones disponibles en IPv4 y proporcionar un espacio de direcciones más amplio.</p>

        <h3>Formato de una Dirección IPv6</h3>
        <p>Una dirección IPv6 tiene un formato hexadecimal y se divide en ocho grupos de cuatro caracteres, separados por dos puntos. Por ejemplo, una dirección IPv6 típica se ve así: 2001:0db8:85a3::8a2e:0370:7334.</p>

        <h3>Ejemplo de Dirección IPv6</h3>
        <p>Una dirección IPv6 típica se ve así: 2001:0db8:85a3::8a2e:0370:7334. Esta dirección es utilizada para propósitos de documentación y ejemplos, y no corresponde a una dirección real en Internet.</p>
      </section>
      <hr class="dividir">
    </div>



    <div class="section-container">
      <section id="partes">
        <h2>Partes de una Dirección IP</h2>
        <p>Una dirección IP consta de dos partes principales: la red y el host. En IPv4, esta separación está determinada por la máscara de subred. En IPv6, la parte de red y la parte de host están definidas por la notación CIDR (Clasless Inter-Domain Routing).</p>

        <h3>Ejemplos de División en IPv4</h3>
        <p>Por ejemplo, en una dirección IPv4 como 192.168.1.100 con una máscara de subred de 255.255.255.0, los primeros tres octetos (192.168.1) representan la parte de red, y el último octeto (100) representa la parte de host.</p>

        <h3>Ejemplos de División en IPv6</h3>
        <p>En IPv6, utilizando notación CIDR, una dirección como 2001:0db8:85a3::8a2e:0370:7334/64 indica que los primeros 64 bits representan la parte de red, y los últimos 64 bits representan la parte de host.</p>
      </section>
      <hr class="dividir">
    </div>


    <div class="section-container">
      <section id="clases">
        <h2>Clases de Direcciones IPv4</h2>
        <p>En IPv4, las direcciones se dividen en clases que determinan el rango de direcciones disponibles. Las clases son A, B, C, D y E.</p>
        <ul>
          <li>Clase A: Rango de direcciones desde 1.0.0.0 a 126.255.255.255</li>
          <li>Clase B: Rango de direcciones desde 128.0.0.0 a 191.255.255.255</li>
          <li>Clase C: Rango de direcciones desde 192.0.0.0 a 223.255.255.255</li>
          <li>Clase D: Reservado para multicast</li>
          <li>Clase E: Reservado para propósitos experimentales</li>
        </ul>
      </section>
      <hr class="dividir">
    </div>

    <div class="section-container">
      <section id="privadas">
        <h2>Direcciones IP Privadas</h2>
        <p>Las direcciones IP privadas están reservadas para uso interno en redes privadas y no son accesibles desde Internet. Esto facilita la asignación de direcciones dentro de una organización sin la necesidad de direcciones IP únicas globalmente.</p>
        <p>Algunos ejemplos de rangos de direcciones IP privadas son:</p>
        <ul>
          <li>Clase A: 10.0.0.0 a 10.255.255.255</li>
          <li>Clase B: 172.16.0.0 a 172.31.255.255</li>
          <li>Clase C: 192.168.0.0 a 192.168.255.255</li>
        </ul>
      </section>
      <hr class="dividir">
    </div>


    <div class="section-container">
      <section id="publicas">
        <h2>Direcciones IP Públicas</h2>
        <p>Las direcciones IP públicas son direcciones únicas y accesibles desde Internet. Son asignadas a organizaciones y proveedores de servicios para permitir la comunicación a nivel global.</p>
        <p>Estas direcciones no se repiten y son esenciales para la conectividad en la red global.</p>
      </section>
      <hr class="dividir">
    </div>

  </main>

  <footer>
    <p>Todos los derechos reservados por Alejandro Cogollo Julio 2023</p>
  </footer>

</body>

</html>