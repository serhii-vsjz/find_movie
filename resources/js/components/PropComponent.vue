<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div v-for="url in urldata">
                    <img class="img" :src="url.poster">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'urldata',
        ],
        mounted() {

            this.update();
        },
        methods: {
            update: function() {
                console.log(this.urldata);
            }
        }
    }
</script>

<style>
    .container img  {
        float: left;
        height: 250px;
    }
</style>
