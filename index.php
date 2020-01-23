<?php $NumberContainersClouds = 10;
$containersClouds = array ();
for ($i = 1; $i <= $NumberContainersClouds; $i++) {
    array_push($containersClouds, $i);
};
?>

<style>
body {
  width: 100%;
  height:100%;
  margin: 0;
  padding: 0;
  background-color: blue;
  z-index: 1;
}

.cloudsbox {
  display: flex;
  position: fixed;
  bottom: -50px;
  align-items: center;
  justify-content: center;
  width: 100%;
  margin: 0;
  z-index: -1;
}

.cloudsbox__container {
  display: inline-block;
  position: relative;
  width: 10%;
  height: 50%;
  margin: 0;
  text-align: center;
}

.cloudsbox__cloud {
  position: absolute;
  right: 50px;
  bottom: 0;
  color: gray;
  font-size: 25px;
  animation-name: movement;
  animation-duration: 4s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}

.anim1,
.anim9 {
  animation-delay: 1.5s;
}

.anim2,
.anim7 {
  animation-delay: 0s;
}

.anim3,
.anim10 {
  animation-delay: 5s;
}

.anim4,
.anim6 {
  animation-delay: 2s;
}

.anim5,
.anim8 {
  animation-delay: 3s;
}

@keyframes movement {
  0% {
    right: 50px;
    bottom: 0;
    opacity: 0;
  }

  20% {
    right: 40px;
    opacity: 1;
  }

  40% {
    right: 60px;
  }

  50% {
    right: 50px;
    color: white;
  }

  60% {
    right: 40px;
  }

  70% {
    right: 50px;
  }

  80% {
    right: 45px;
  }

  90% {
    right: 50px;
  }

  100% {
    bottom: 800px;
    opacity: 0;
  }
}

</style>

<body>
<div class="cloudsbox">
<?php foreach($containersClouds as $container) { ?>
  <div class="cloudsbox__container">
      <div class="cloudsbox__cloud anim<?= $container ?>">
        ☁️
      </div>
  </div>
<?php } ?>
</body>
