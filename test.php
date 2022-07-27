<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>

    <link rel="stylesheet" href="test.css">

    <script src="https://unpkg.com/vue@3"></script>
</head>

<body class="">

    <div class="">
        <div class="container">
            <h1>Hallo</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adip</p>
        </div>
    </div>
    <div class="" id="app">
        <div class="container editor">
            <p class="display" v-html="convert()"></p>
            <textarea name="" id="" cols="30" rows="10" v-model="content"></textarea>
        </div>
    </div>


    <script>
        const {
            createApp
        } = Vue

        createApp({
            data() {
                return {
                    content: " fasdfasdf"
                }
            },
            methods: {
                convert() {
                    replacements = [
                        ['Hello', '<b>Hello</b>'],
                        ['for', '<span class="keyword">for</span>'],
                        ['in', '<span class="keyword">in</span>'],
                        ['\n', '<br>'],
                    ]

                    var temp = this.content

                    replacements.forEach(el => {
                        console.log(el)
                        temp = temp.split(el[0]).join(el[1])
                        
                    })

                    return temp

                }
            }
        }).mount('#app')
    </script>

</body>

</html>