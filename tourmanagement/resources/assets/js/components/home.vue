<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
                <div class="ahmed">
                    {{ahmed}}
                </div> 
            </div>
        </div>
    </div>
</template>

<script>
    
    export default {
        data(){
            return {
                ahmed:''
            }
        },
        created(){
            this.$http.get('/ahmed').then((data)=>{
                this.ahmed = data.body;
            },(error)=>{
                this.ahmed = error;
            })
        }   
    }
</script>

<style lang='scss'>
    .ahmed{
        font-size:2em;
        text-align:center;
        background:lightgreen;
        color:#222;
    }
</style>