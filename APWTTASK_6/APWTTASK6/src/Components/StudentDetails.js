import React, { useState } from 'react';
import { useParams } from 'react-router';
import NavBar from './NavBar';
import StudentData from './StudentData';

const StudentDetails = () => {

    const { id } = useParams();
    const [students, setStudents] = useState(StudentData);
    console.log(setStudents);
    console.log(id);
    const selectedStudent = students.find(students => students.id = id);
    return (
        <div>
            <NavBar />
            <div className="d-flex justify-content-center align-items-center" style={{ height: '100vh',  }}>
                <div style={{ padding: "200px", background:"#BB8FED" }}>
                    <h3>ORDER DETAILS</h3><br></br>
                    <h5>Name: {selectedStudent?.name}</h5>
                    <h5>Phone: 01912345678</h5>
                    <h5>Medicine: Maxpro 20</h5>
                    <h5>Prize: 74</h5>
                    {/* <h5> Department: {selectedStudent?.department}</h5>
                    <h5>CGPA: {selectedStudent?.cgpa}</h5> */}
                    <h5>  Address: {selectedStudent?.address}</h5>
                </div>
            </div>
        </div>
    );
};

export default StudentDetails;