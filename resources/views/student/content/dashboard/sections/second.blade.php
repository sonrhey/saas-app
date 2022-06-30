<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4" role="tablist">
  <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
  <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false" tabindex="-1">Pending</a>
  <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false" tabindex="-1">Completed</a>
</nav>

<div class="app-card app-card-chart h-100 shadow-sm">
  <div class="app-card-header p-3">
    <div class="row justify-content-between align-items-center">
      <div class="col-auto">
        <h4 class="app-card-title">List of Documents</h4>
      </div>
    </div>
  </div>
  <div class="app-card-body p-3 p-lg-4">
    <table class="table app-table-hover mb-0 text-left">
      <thead>
        <tr>
          <th class="cell">No</th>
          <th class="cell">Document Name</th>
          <th class="cell">Status</th>
          <th class="cell">Due Date</th>
          <th class="cell">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="cell">1</td>
          <td class="cell">Enrollment Form</td>
          <td class="cell"><span class="badge bg-warning">Pending</span></td>
          <td class="cell">05/20/2022 07:00:23 AM</td>
          <td class="cell"><button class="btn btn-secondary" type="button">Sign</button></td>
        </tr>
        <tr>
          <td class="cell">2</td>
          <td class="cell">Enrollment Form</td>
          <td class="cell"><span class="badge bg-warning">Pending</span></td>
          <td class="cell">05/20/2022 07:00:23 AM</td>
          <td class="cell"><button class="btn btn-secondary" type="button">Sign</button></td>
        </tr>
        <tr>
          <td class="cell">3</td>
          <td class="cell">Enrollment Form</td>
          <td class="cell"><span class="badge bg-success">Signed</span></td>
          <td class="cell">05/20/2022 07:00:23 AM</td>
          <td class="cell"><span class="badge bg-success">Completed</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>