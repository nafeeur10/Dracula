<template>
    <div id="container">
        <div id="animate"></div>
    </div>     
</template>

<script>
    export default {
        data() {
            return {
            }
        },
        methods: {
            boxAnimation() {
                // get window width and height
                var windowContainer = document.getElementById("container");
                windowContainer.style.width = window.innerWidth;
                windowContainer.style.height = window.innerHeight;

                var elem = document.getElementById("animate");   
                var posx = 0;
                var posy = 0;
                var id = setInterval(frame, 5);
                let count = 0;
                function frame() 
                {
                    if (posy >= window.innerWidth-50 || posx >= window.innerHeight-50) { count = 1; }
                    if(posx <= 0 || posy <= 0) { count = 0; }
                    if(count == 1) 
                    {
                        posx--; 
                        posy-=2.3; 
                        elem.style.top = posx + "px"; 
                        elem.style.left = posy + "px"; 
                    }
                    else 
                    {
                        posx++; 
                        posy+=2.3; 
                        elem.style.top = posx + "px"; 
                        elem.style.left = posy + "px"; 
                    }
                }
            }
        },
        mounted() {
            this.boxAnimation();
        }
    }
</script>
<style scoped>
#container {
  position: relative;
  background: yellow;
}
#animate {
  width: 50px;
  height: 50px;
  position: absolute;
  background-color: red;
}
</style>
