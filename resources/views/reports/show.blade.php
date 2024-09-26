<h1 style="background-color:powderblue;" align='center'>Reports Details</h1>
Report Title: {{$report->title}}
<br>Report Description: {{$report->description}}
<br>Report Priority: {{$report->priority}}
<center>
    <small style="color:green; "><br>Created at :{{$report->created_at}}</small>
    <small style="background-color:tomato;">Updated at : {{$report->updated_at}}</small>
</center>