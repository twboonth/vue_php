<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vuejs & PHP SPA</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>

<body>
    <div class="container" id="app">
        <h2 class="text-center">
            {{message}}
        </h2>
        <div class="row">
            <div class="col-md-12">
                <form @submit="submitData" @reset="resetData" method="post">
                    <div class="form-group">
                        <label for="">ชื่อจริง</label>
                        <input type="text" v-model="form.fname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">นามสกุล</label>
                        <input type="text" v-model="form.lname" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" v-model="form.status" class="btn btn-success">
                        <input type="reset" value="Reset" class="btn btn-warning">
                    </div>
                </form>
            </div>

        </div>
        <div class="py-2">
            {{form}}

        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">fname</th>
                    <th scope="col">lname</th>
                    <th scope="col">manage</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="row in users">
                    <th scope="row">{{row.id}}</th>
                    <td>{{row.fname}}</td>
                    <td>{{row.lname}}</td>
                    <td><button class="btn btn-primary" @click="editUser(row.id)">แก้ไข</button>
                    <button class="btn btn-warning" @click="deleteUser(row.id)">ลบ</button></td>
                </tr>
               
            </tbody>
        </table>
    </div>

</body>
<script src="app1.js"></script>

</html>