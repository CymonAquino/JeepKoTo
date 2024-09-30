document.addEventListener('DOMContentLoaded', function () {
    const employeeTableBody = document.getElementById('employeeTableBody');
    const employeeForm = document.getElementById('employeeForm');
    let employees = [];

    // Function to render employees in the table
    function renderEmployees() {
        employeeTableBody.innerHTML = '';
        employees.forEach(employee => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${employee.id}</td>
                <td>${employee.name}</td>
                <td>${employee.contact}</td>
                <td>${employee.role}</td>
                <td>
                    <button onclick="editEmployee(${employee.id})">Edit</button>
                    <button onclick="deleteEmployee(${employee.id})">Delete</button>
                </td>
            `;
            employeeTableBody.appendChild(row);
        });
    }

    // Add employee (or update existing)
    employeeForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const id = document.getElementById('employeeId').value;
        const name = document.getElementById('name').value;
        const contact = document.getElementById('contact').value;
        const role = document.getElementById('role').value;

        if (id) {
            // Update employee
            const employee = employees.find(emp => emp.id == id);
            employee.name = name;
            employee.contact = contact;
            employee.role = role;
        } else {
            // Add new employee
            const newEmployee = {
                id: employees.length ? employees[employees.length - 1].id + 1 : 1,
                name,
                contact,
                role
            };
            employees.push(newEmployee);
        }

        renderEmployees();
        employeeForm.reset();
    });

    // Edit employee
    window.editEmployee = function (id) {
        const employee = employees.find(emp => emp.id == id);
        document.getElementById('employeeId').value = employee.id;
        document.getElementById('name').value = employee.name;
        document.getElementById('contact').value = employee.contact;
        document.getElementById('role').value = employee.role;
    };

    // Delete employee
    window.deleteEmployee = function (id) {
        employees = employees.filter(emp => emp.id != id);
        renderEmployees();
    };
});
