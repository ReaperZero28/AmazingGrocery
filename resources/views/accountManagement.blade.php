@extends('homeTemplate')

@section('title')
<title>Amazing E-Grocery - Home</title>
@endsection

@section('content-1')
<div class="container-fluid">
    <table class="table table-success table-striped-columns table-sm align-middle" style="width:45% ; margin-top: 6rem; margin-left:23rem">
        <thead>
          <tr>
            <th scope="col" style="text-align: center">No.</th>
            <th scope="col" style="text-align: center">Account</th>
            <th colspan="2" style="text-align: center">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <tr>
            <th scope="row" style="text-align: center">1</th>
            <td style="text-align: center">First L. - User</td>
            <td style="text-align: center"><a href="updateRole">Update Role</a></td>
            <td style="text-align: center"><a href="deleteAcc">Delete Account</a></td>
          </tr>

          <tr>
            <th scope="row" style="text-align: center">2</th>
            <td style="text-align: center">Account 2 - User</td>
            <td style="text-align: center"><a href="updateRole">Update Role</a></td>
            <td style="text-align: center"><a href="deleteAcc">Delete Account</a></td>
          </tr>

          <tr>
            <th scope="row" style="text-align: center">3</th>
            <td style="text-align: center">Account 3 - Admin</td>
            <td style="text-align: center"><a href="updateRole">Update Role</a></td>
            <td style="text-align: center"><a href="deleteAcc">Delete Account</a></td>
          </tr>

          <tr>
            <th scope="row" style="text-align: center">4</th>
            <td style="text-align: center">Account 4 - User</td>
            <td style="text-align: center"><a href="updateRole">Update Role</a></td>
            <td style="text-align: center"><a href="deleteAcc">Delete Account</a></td>
          </tr>

          <tr>
            <th scope="row" style="text-align: center">5</th>
            <td style="text-align: center">Account 5 - Admin</td>
            <td style="text-align: center"><a href="updateRole">Update Role</a></td>
            <td style="text-align: center"><a href="deleteAcc">Delete Account</a></td>
          </tr>

          <tr>
            <th scope="row" style="text-align: center">6</th>
            <td style="text-align: center">Account 6 - Admin</td>
            <td style="text-align: center"><a href="updateRole">Update Role</a></td>
            <td style="text-align: center"><a href="deleteAcc">Delete Account</a></td>
          </tr>

          <tr>
            <th scope="row" style="text-align: center">7</th>
            <td style="text-align: center">Account 7 - User</td>
            <td style="text-align: center"><a href="updateRole">Update Role</a></td>
            <td style="text-align: center"><a href="deleteAcc">Delete Account</a></td>
          </tr>

        </tbody>
      </table>
</div>

<footer>
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color:#1F8A70; height: 3rem; margin-top: 13rem; display:flex; align-items: center; justify-content:center; position: absolute>
        <div class="container-fluid">
            <h3 style="text-shadow: 1px 2px 12px rgba(0,0,0,0.33) font-size: 1%">
                <a class="navbar-brand">Amazing E-grocery 2023</a>
            </h3>
        </div>
    </nav>
</footer>

@endsection
