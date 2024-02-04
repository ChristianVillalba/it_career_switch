# Fundamentals of Operating Systems
* How a computer works:
    * Input is data we give to our computers
    * Processing is comprised of the translation of input and the instructions given for output
    * Memory is used to store either temporary or permanent information
    * Output is the information that gets returned by the computer

### Processes
* Processes can sometimes also be called “tasks” or “jobs”
* The key defining factor is that processes generally operate independently and do not share data;
* All of the processes running on your system can be found in the operating system’s process manager:
    * Task Manager in Windows
    * Activity Monitor in MacOS
    * System Monitor or top in most Linux Distributions
* Lifecycle of a Process:
    * `New`: The program has been started and waits to be added into memory in order to become a full process.
    * `Ready`: Process fully initialized, loaded into memory, and waiting to be picked up by the processor.
    * `Running`: Currently being executed by the processor.
    * `Blocked`: The process requires a contested resource that it must wait for.
    * `Finished`: The process has been completed.   

### Threads
* **A process** is an abstract data structure that represents all of the necessary information to run a program.
* **A thread** represents the actual sequence of processor instructions that are actively being executed.
* Each process contains at least one thread to be able to execute, although more can be created to allow for concurrent processing if it is supported by the CPU. 
* **Multithreading**
    * Typically, a single CPU core can only execute one thread, and therefore one process, at a time.
    * With some hardware advances, single CPU cores can now execute multiple threads at once, which is a capability called multithreading.
* Kernel Threads vs User Threads
    * **Kernel thread**: A thread built into the existing process is considered.
    * This means that the kernel within the operating system is fully aware of these threads and directly manages their execution.
    * **User threads** that exist solely in userspace and, while functionally identical, are not known or controlled by the kernel.
    * These threads are even more efficient than their kernel counterparts as they save on the costly indirection of making a system call to constantly interact with the kernel.
* There are three common models for mapping user threads to kernel threads:
    * **1:1 Kernel-level threading** for a simple implementation that best allows for hardware acceleration provided by the kernel threads.
    * **N:1 User-level threading** for ultra-light threads that can quickly communicate and context switch, but do not benefit from hardware acceleration due to sharing the same kernel thread.
    * **M:N Hybrid threading** to get the best of both of the above solutions: very light and fast threads that can be hardware accelerated as necessary.     
    However, this complex implementation can lead to bugs such as priority inversion where less important tasks are mistakenly prioritized and run first.

### PROCESS SCHEDULING
* How **processes** move within **data structures** depends on the **algorithm** used and the scheduling goals desired for the system:
    * **First come, first served:** 
        * where processes are put into a queue and then executed in the order that they arrive.
    * **Priority scheduling:** 
        * where each process is given a numeric priority and then those processes are organized and executed according to that priority.
    * **Shortest job first:**
        * where processes with the shortest execution time, as calculated through some historical average runtime, are prioritized to run first.
        * A variation of priority scheduling
    * **Shortest remaining time:**
        * Where processes with the shortest remaining execution time are prioritized to run first.
        * A preemptive variation of shortest job first
    * **Round robin:** 
        * Where a fixed amount of execution time, called a time slice, is chosen and assigned to each process. 
        * Each process is cycled through until eventually all of the processes are completed.
    * **Multiple-level queue scheduling:** 
        * where processes are categorized and then placed in multiple queues or levels with differing priorities.


### Introduction to Synchronization
* Synchronization which ensures that threads in a multi-threaded program use shared resources safely.
* Programmatically, resources are used in various places in our code. These areas are known as critical sections. 
* In order to synchronize our programs, we must ensure all critical sections have the following three properties:
    * **Mutual exclusion**: only one thread can be inside the critical section at a time
    * **Progress**: if no thread is inside the critical section, then a thread trying to access it must be allowed to do so
    * **Bounded waiting**: each thread waiting to access the critical section must, at some point, gain access

### File Systems
* The filesystem is the data structure used by the operating system to store and retrieve data.
* This data is organized into files that are units of storage used to describe a self-contained piece of data.
    * Each file has a format depending on what that file contains.
    * Indicated by the file’s extension

### Introduction to IO Systems
* **IO**, or **Input/Output** devices refer to any physical devices that interact with a CPU.
    * **Input** devices send signals to a computer and 
    * **Output** devices allow for computers to send information out from a computer.
    * IO devices can be categorized into **three categories**: 
        * Human-readable, 
        * Machine-readable 
        * Communication
* **Device drivers** support the communication between IO devices and the CPU.
    * There are two types of device drivers: 
        * kernel-mode
        * user-mode. 
* There are three methods that IO devices use to read/write data: 
    * character, 
    * block
    * network.
* In IO systems, blocking is a method in which when an IO makes a request, an application typically cannot continue executing other requests until it has the necessary information changes from the IO.
* In contrast, non-blocking requests get placed into a queue while waiting so that the CPU resources can be used to complete other tasks from the event pool of an application.
* The interrupt handler is like a pool or queue of interrupts being sent to the CPU. It handles the execution of interrupt signals as they are received from IO devices.
* **Memory-mapped IO** 
    * Ir refers to a system that is designed to allow both an IO device that is connected to a computer and the memory of the computer to share address space to the interface.
* **Direct memory access (DMA)** 
    * refers to a method in which IO devices have direct access to the main memory of a computer. 
    * For DMA, a CPU will trigger the execution of data to/from an IO device to a computer, but then will continue to complete other tasks while the data transfer executes.
* **IO SOFTWARE**
    * The **user-space** is the place in memory in which user processes run and the 
    * The **kernel-space** is the place in memory in which the kernel functions and manages system calls.
    * The user-space interacts with the kernel by sending system calls to the kernel-space.
    * **Layers of the IO system** that support **user-space** include: 
        * user-level IO software
    * **Layers of the IO system** that support **kernel-space** include: 
        * device-independent software 
        * device drivers 
        * interrupt handlers
    * **Device drivers** 
        * It **device-specific** code...  
        * added to a computer so that **a device may interact with a computer**.
    * **The interrupt handler** is a pool or queue of interrupts being sent to the CPU.
    * **Device-independent** software refers to the software components that handle functions that are not specific to any single IO device.