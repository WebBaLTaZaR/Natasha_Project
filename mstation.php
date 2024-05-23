<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Mstation</title>
  </head>

  <body>
    <div class="mstationWrap"> <!-- Общая обёртка страницы -->
      <h2 class="mstationMainText">Метеостанция</h2> <!-- Заголовок-->
      <div class="mstationIndicators"> <!-- Обёртка для индикаторов-->

        <div class="indicator"> <!-- Обёртка для каждого индикатора-->
          <div class="indicatorWrapLeft"> <!-- дополнительная обёртка для разграничения контейнеров-->
            <img src="img/thermometer.svg" alt="thermometer" /><span
              class="indicatorName"
              >температура</span
            >
          </div>
          <div class="indicatorWrapRight"> <!-- дополнительная обёртка для разграничения контейнеров-->
          <span class="readout temp"><?php echo $temp; ?></span>
          <span class="systemOfCalculations">°С</span>
          </div>
        </div>
        <div class="indicator">
          <div class="indicatorWrapLeft">
            <img src="img/humidity.svg" alt="humidity" /><span
              class="indicatorName"
              >влажность</span
            >
          </div>
          <div class="indicatorWrapRight">
            <span class="readout humidity"><?php echo $humidity; ?></span
            ><span class="systemOfCalculations">% RH</span>
          </div>
        </div>
        <div class="indicator">
          <div class="indicatorWrapLeft">
            <img src="img/pressure.svg" alt="pressure" /><span
              class="indicatorName">давление</span>
          </div>
          <div class="indicatorWrapRight">
            <span class="readout pressure"><?php echo $pressure; ?></span
            ><span class="systemOfCalculations">мм рт. ст.</span>
          </div>
        </div>
        <div class="indicator">
          <div class="indicatorWrapLeft">
            <img src="img/co2.svg" alt="CO2" /><span 
			class="indicatorName">углекислый газ</span>
          </div>
          <div class="indicatorWrapRight">
            <span class="readout co2"><?php echo $co2; ?></span
            ><span class="systemOfCalculations">ppm</span>
          </div>
        </div>
      </div>
      <div class="buttonHomeWrap">
        <div class="buttonHome">
          <a href="index.html">
            <img src="img/home.svg" alt="home" />
          </a>
        </div>
      </div>
    </div>
    <script>
      function fetchData() {
    fetch('api.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            console.log("Data received:", data); // Логирование полученных данных
            document.querySelector('.temp').textContent = data.temp;
            document.querySelector('.humidity').textContent = data.humidity;
            document.querySelector('.pressure').textContent = data.pressure;
            document.querySelector('.co2').textContent = data.co2;
        })
        .catch(error => console.error('Error fetching data:', error));
}
setInterval(fetchData, 5000);

    </script>
  </body>
</html>
